<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCerfRequest;
use App\Http\Requests\ShowCerfRequest;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Activity;
use App\Cerf;
use App\Event;
use App\KiwanisAttendee;
use App\User;
use Auth;

class CerfsController extends Controller {

    public function __construct() {

        // All CERF actions require user to be logged in.
        $this->middleware('auth');

        $this->middleware('admin', ['only' => ['index']]);
    }

    /**
     * Display events that require CERFs.
     *
     * @return \Illuminate\View\View
     */
    public function overview()
    {
        // TODO Only check events created after the CERFs system is implemented.

        // Finds IDs of all events that do not have an associated CERF.
        $eventIdsWithoutCerfs = Event::select('events.id')
                                        ->leftJoin('cerfs', 'events.id', '=', 'cerfs.event_id')
                                        ->whereNull('cerfs.id')
                                        ->get();

        // TODO Modify or make new query so that events with pending CERFs are also retrieved.

        // Retrieves events without CERFs based on ID. Casts to array to pass to foreach loop in view.
        $eventsWithoutCerfs = Event::find($eventIdsWithoutCerfs->toArray());

        $userCerfs = Cerf::where('reporter_id', Auth::id())->where('approved', false)->get();

        return view('pages.cerfs.overview', compact('eventsWithoutCerfs', 'userCerfs'));
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
        $pendingCerfs = Cerf::where('approved', false)->get();
        $approvedCerfs = Cerf::where('approved', true)->get();

        return view('pages.cerfs.index', compact('pendingCerfs', 'approvedCerfs'));
	}

    /**
     * Show form for creating a new CERF.
     * Event details automatically filled in from previous overview page.
     *
     * @param $event
     * @return Response
     */
	public function create()
	{
        // Gets ID of event put into session by @select.
        $event = Event::find(Session::get('event_id'));

        // View renders blank chair profile if chair cannot be found.
        $chair = null;

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

        /*
         * Finds event for current CERF and updates chair according to CERF
         * form.
         */
        $event = Event::find($input['event_id']);
        $event->update(array('chair_id' => $input['chair_id']));

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
        session()->put('event_id', $input['event_id']);
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

        if (Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator') || Auth::id() === $cerf->user_id) {

            $activities = Activity::where('cerf_id', $cerf->id)->get();
            $kiwanisAttendees = KiwanisAttendee::where('cerf_id', $cerf->id)->get();

            $service_hours_sum = $activities->sum('service_hours') + $activities->sum('planning_hours') + $activities->sum('traveling_hours');
            $admin_hours_sum = $activities->sum('admin_hours');
            $social_hours_sum = $activities->sum('social_hours');

            // TODO Add cerf_id to events_assigned_tags pivot table to get appropriate tags for each CERF.

            return view('pages.cerfs.show', compact('cerf', 'activities', 'kiwanisAttendees',
                                                    'service_hours_sum', 'admin_hours_sum', 'social_hours_sum'));
        }
        else {
            redirect()->action('CerfsController@overview');
        }
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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
		//
	}

}
