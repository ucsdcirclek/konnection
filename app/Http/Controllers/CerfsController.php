<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCerfRequest;
use App\Http\Requests\ShowCerfRequest;
use App\Http\Requests\UpdateCerfRequest;
use App\Http\Requests\UpdateActivityRequest;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Activity;
use App\Cerf;
use App\Event;
use App\EventCategory;
use App\KiwanisAttendee;
use App\User;
use Auth;
use Carbon\Carbon;
use DB;

class CerfsController extends Controller {

    public function __construct() {

        // All CERF actions require user to be logged in.
        $this->middleware('auth');

        $this->middleware('admin', ['only' => ['index', 'destroy', 'approve']]);
    }

    /**
     * Display events that require CERFs.
     *
     * @return \Illuminate\View\View
     */
    public function overview()
    {
        // Only shows events that occurred within the last month and a half.
        $newestAllowed = Carbon::now();
        $oldestAllowed = Carbon::now()->subMonth()->subWeeks(2);

        // Finds IDs of all events that do not have an associated approved CERF.
        $eventIdsWithoutCerfs = Event::select('events.id')
                                     ->leftJoin('cerfs', 'events.id', '=', 'cerfs.event_id')
                                     ->whereNull('cerfs.id')
                                     ->orWhere('cerfs.approved', false)
                                     ->get();

        // TODO Paginate events that need to be CERFed.

        // Retrieves events without CERFs based on ID. Casts to array to pass to foreach loop in view and sorts events
        // in descending order by when they ended (most recent events are closer to the top).
        $eventsWithoutCerfs = Event::find($eventIdsWithoutCerfs->toArray())->sortByDesc('end_time');

        // Gets CERFs that belong to currently logged in user.
        $userCerfs = Cerf::where('reporter_id', Auth::id())->where('approved', false)->get();

        return view('pages.cerfs.overview', compact('eventsWithoutCerfs', 'userCerfs', 'oldestAllowed', 'newestAllowed'));
    }

    /**
     * Redirects to CERF creation form with details of event to be CERFed.
     *
     * @param $id
     * @return mixed
     */
    public function select($id)
    {
        // Uses Session::put instead of flashing to avoid create form crash when refreshed.
        Session::put('event_id', $id);

        return redirect()->action('CerfsController@create');
    }

	/**
	 * Display all CERFs.
	 *
	 * @return Response
	 */
	public function index()
	{
        $now = Carbon::now();
        $monthAndHalfAgo = Carbon::now()->subMonth()->subWeeks(2);

        // Does not limit CERFs within a month and a half ago since out of date CERFs should be rejected to be deleted
        // anyways.
        $pendingCerfs = Cerf::where('approved', false)->orderBy('created_at', 'desc')->get();

        $approvedCerfs = Cerf::where('approved', true)
                             ->whereBetween('created_at', [$monthAndHalfAgo, $now])
                             ->orderBy('created_at', 'desc')->get();

        return view('pages.cerfs.index', compact('pendingCerfs', 'approvedCerfs'));
	}

    /**
     * Show form for creating a new CERF.
     * Event details automatically filled in from previous overview page.
     * @return Response
     * @internal param $event
     */
	public function create()
	{
        // Gets ID of event put into session by @select.
        $event = Event::find(Session::get('event_id'));
        session()->forget('hidden');

        // View renders blank chair profile if chair cannot be found.
        $chair = null;

        // Event ID to be CERFed is typically flashed to the session. If this
        // value does not exist, then the user intends to create a CERF for an
        // event that does not yet exist.
        if (!$event) {

            // Creates an event not on the calendar that has a CERF.
            session()->put('hidden', 'true');
            return view('pages.cerfs.create', compact('chair'));
        }

        // Finds chair of event.
        if (!is_null($event->chair_id)) {
            $chair = User::find($event->chair_id);
        }

        return view('pages.cerfs.create', compact('event', 'chair'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCerfRequest $request
     * @return Response
     * @internal param $CreateCerfRequest
     */
	public function store(CreateCerfRequest $request)
	{
        $input = $request->all();

        $event = null;

        if (session()->has('hidden'))
        {
            // Extra validation for when events are created via CERF form.
            $this->validate($request, [
                'start_time' => 'required|date|before:end_time',
                'end_time' => 'required|date'
            ]);

            /*
             * Creates event with minimal fields since an event made via the
             * CERF form should only be recorded for MRFs, and not placed on
             * the calendar.
             */
            $event = Event::create(array(
                'chair_id' => $input['chair_id'],
                'creator_id' => Auth::check(),
                'title' => $input['title'],
                'description' => 'Event that is not on the calendar. Recorded for administrative purposes.',
                'event_location' => $input['event_location'],
                'start_time' => $input['start_time'],
                'end_time' => $input['end_time'],
                'hidden' => true
            ));

            // Removes all fields irrelevant to creating a CERF.
            unset($input['chair_id'],
                  $input['title'],
                  $input['event_location'],
                  $input['start_time'],
                  $input['end_time']);

            $input['event_id'] = $event->id;
        }
        else
        {
            /*
             * Finds event for current CERF and updates chair according to CERF
             * form.
             */
            $event = Event::find($input['event_id']);
            $event->update(array('chair_id' => $input['chair_id']));

            // Request contains start and end times to satisfy validation.
            unset($input['start_time'], $input['end_time']);
        }

        /*
         * Removes chair_id attribute from input before creating CERF since
         * chair_id is not a columns in cerfs table. Adds reporter_id field to
         * complete attributes array.
         */
        unset($input['chair_id']);
        $input['reporter_id'] = Auth::id();

        $cerf = Cerf::create($input);

        /*
         * Stores values in session for next steps of multi-page form to create
         * tags, activities, and Kiwanis attendees based on current event and
         * CERF.
         */
        session()->put('event_id', $event->id);
        session()->put('cerf_id', $cerf->id);

        return redirect()->action('TagsController@create');
	}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
	public function show($id)
	{
        $cerf = Cerf::find($id);

        if (!(Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator') || Auth::id() === $cerf->user_id))
            redirect()->action('CerfsController@overview');

        $activities = Activity::where('cerf_id', $cerf->id)->get();
        $kiwanisAttendees = KiwanisAttendee::where('cerf_id', $cerf->id)->get();

        $serviceHoursSum = $activities->sum('service_hours') + $activities->sum('planning_hours') + $activities->sum('traveling_hours');
        $adminHoursSum = $activities->sum('admin_hours');
        $socialHoursSum = $activities->sum('social_hours');

        $event = $cerf->event;
        $tagCategories = [];

        for ($index = 1; $index <= 4; $index++) {

            $currentTags = [];
            $tags = $event->tags()->where('cerf_id', $cerf->id)->where('category_id', $index)->get();

            foreach($tags as $tag) {
                array_push($currentTags, $tag->name . ' (' . $tag->abbreviation . ')');
            }

            $tagCategories[EventCategory::find($index)->name] = $currentTags;
        }

        $drivers = [];

        foreach($activities as $activity)
            if ($activity->mileage > 0) $drivers[$activity->name] = $activity->mileage;

        return view('pages.cerfs.show', compact('cerf', 'activities', 'kiwanisAttendees',
                                                'serviceHoursSum', 'adminHoursSum', 'socialHoursSum',
                                                'tagCategories', 'drivers'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param UpdateCerfRequest $request
     * @return Response
     */
	public function update($id, UpdateCerfRequest $request)
	{
        //
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        /*
         * Model delete() method does not result in cascade deleting as
         * specified in the database migration, but the raw SQL query does
         * result in cascade deleting. Possible Laravel bug? Raw SQL queries
         * below do not soft delete.
         */
        DB::statement('delete from cerfs where id=' . $id);

        /*
         * Also delete the event-tag relations that were submitted when this
         * CERF was submitted.
         */
        DB::statement('delete from events_assigned_tags where cerf_id=' . $id);

        return redirect()->action('CerfsController@overview');
	}

    /**
     * Approves a CERF by deleting all other pending CERFs for the same event.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve($id)
    {
        $cerf = Cerf::find($id);
        $cerf->update(['approved' => true]);

        //updates the appropriate activities associated with the cerf_id
        $activities = Activity::where('cerf_id', $id)->get();
        foreach ($activities as $activity)
        {
            $activity->update(['approved' => true]);
        }

        $otherCerfs = Cerf::where('event_id', $cerf->event_id)->where('approved', false)->get();

        foreach($otherCerfs as $cerf) {

            // See comments in CerfsController@destroy.
            DB::statement('delete from cerfs where id=' . $cerf->id);
            DB::statement('delete from events_assigned_tags where cerf_id=' . $cerf->id);

            // Deletes the activites associated with the cerf to delete
            $otherActivities = Activity::where('cerf_id', $cerf->id)->get();

            foreach($otherActivities as $activity) {
                DB::statement('delete from activity_log where cerf_id=' . $cerf->id);
            }
        }

        return redirect()->action('CerfsController@overview');
    }
}
