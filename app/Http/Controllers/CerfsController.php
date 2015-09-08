<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCerfRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Activity;
use App\Cerf;
use App\Event;
use App\EventTag;
use App\EventRegistration;
use App\KiwanisAttendee;
use App\User;
use Auth;
use DB;

class CerfsController extends Controller {

    // TODO Remember to use eager loading when passing data to views.

    public function __construct() {

        // All CERF actions require user to be logged in.
        $this->middleware('auth');
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
        $event_ids_without_cerfs = Event::select('events.id')
                                        ->leftJoin('cerfs', 'events.id', '=', 'cerfs.event_id')
                                        ->whereNull('cerfs.id')
                                        ->get();

        // Retrieves events without CERFs based on ID. Casts to array to pass to foreach loop in view.
        $events_without_cerfs = Event::find($event_ids_without_cerfs->toArray());

        return view('pages.cerfs.overview', compact('events_without_cerfs'));
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

        return Redirect::to('cerfs/create');
    }

	/**
	 * Display all CERFs.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('pages.cerfs.index');
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

        // TODO Customize checkbox for each registration.
        $registrations = EventRegistration::where('event_id', $event->id)->get();

        // Gets tags to display in form.
        $service_tags = EventTag::where('category_id', 1)->get();
        $admin_tags = EventTag::where('category_id', 2)->get();
        $social_tags = EventTag::where('category_id', 3)->get();
        $misc_tags = EventTag:: where('category_id', 4)->get();

        return view('pages.cerfs.create', compact('event', 'chair', 'registrations', 'service_tags', 'admin_tags',
                                                  'social_tags', 'misc_tags'));
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
         * Picks CERF-related attributes from user input, since not all form
         * fields are CERF attributes.
         */
        $cerfAttributes = [
            'event_id' => $input['event_id'],
            'reporter_id' => Auth::id(),
            'amount_raised' => $input['amount_raised'],
            'amount_spent' => $input['amount_spent'],
            'net_profit' => $input['net_profit'],
            'funds_purpose' => $input['funds_purpose'],
            'summary' => $input['summary'],
            'strengths' => $input['strengths'],
            'weaknesses' => $input['weaknesses'],
            'reflection' => $input['reflection'],
            'approved' => false
        ];

        $cerf = Cerf::create($cerfAttributes);

        /*
         * Finds event for current CERF and updates chair according to CERF
         * form.
         */
        $event = Event::find($input['event_id']);
        $event->update(array('chair_id' => $input['chair_id']));

        // TODO Split to other controllers

        /*
         * Makes activity logs of paid members (assuming that every paid member
         * has an account).
         */
        foreach($input['attendee_id'] as $id)
        {
            $attendee = User::find($id);
            
            $activityAttributes = [
                'user_id' => $id,
                'cerf_id' => $cerf->id,
                'name' => $attendee->first_name . ' ' . $attendee->last_name,
                'service_hours' => $input['service_hours'][$id],
                'planning_hours' => $input['planning_hours'][$id],
                'traveling_hours' => $input['traveling_hours'][$id],
                'admin_hours' => $input['admin_hours'][$id],
                'social_hours' => $input['social_hours'][$id],
                'mileage' => $input['mileage'][$id],
                'approved' => false
            ];

            Activity::create($activityAttributes);
        }

        /*
         * Makes activity logs of non-paid members (assuming that non-paid
         * members generally do not have accounts. Name field in database is in
         * case attendees do not have an account at the time the CERF is
         * reported, in which case a name is put into the database to record
         * their attendance.
         */
        if(array_key_exists('unpaid_attendee', $input)) {

            foreach($input['unpaid_attendee'] as $index => $unpaid_attendee)
            {
                $activityAttributes = [
                    'user_id' => null,
                    'cerf_id' => $cerf->id,
                    'name' => $unpaid_attendee,
                    'service_hours' => $input['unpaid_service_hours'][$index],
                    'planning_hours' => $input['unpaid_planning_hours'][$index],
                    'traveling_hours' => $input['unpaid_traveling_hours'][$index],
                    'admin_hours' => $input['unpaid_admin_hours'][$index],
                    'social_hours' => $input['unpaid_social_hours'][$index],
                    'mileage' => $input['unpaid_mileage'][$index],
                    'approved' => false
                ];

                Activity::create($activityAttributes);
            }
        }

        /*
         * Creates Kiwanis Family Club attendees.
         */
        if(array_key_exists('kiwanis_club_name', $input))
        {
            foreach($input['kiwanis_club_name'] as $index => $kiwanis_club)
            {
                $kiwanisAttendeeAttributes = [
                    'cerf_id' => $cerf->id,
                    'name' => $kiwanis_club,
                    'members_attended' => $input['num_members'][$index]
                ];

                KiwanisAttendee::create($kiwanisAttendeeAttributes);
            }
        }

        $tagAbbreviations = [];

        /*
         * Some events may have tags in all four categories, and while an event
         * event has to have a tag in at least one of the service, leadership,
         * or fellowship categories, an event might not have a tag in all, so
         * check and merge into one array with all tags for reduced code
         * repetition.
         */
        if (array_key_exists('service_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['service_tags']);
        if (array_key_exists('admin_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['admin_tags']);
        if (array_key_exists('social_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['social_tags']);
        if (array_key_exists('misc_tags', $input)) $tagAbbreviations = array_merge($tagAbbreviations, $input['misc_tags']);

        /*
         * Iterates through all tags selected and queries database with
         * abbreviation to find appropriate tag ID. Each tag abbreviation is
         * unique, so no need to check.
         */
        foreach($tagAbbreviations as $abbreviation) {
            $tag = EventTag::where('abbreviation', $abbreviation)->first();

            /*
             * An additional cerf_id column was added to this pivot table
             * because there may be multiple CERFs for an event and until one
             * CERF is approved (so that all other CERFs are deleted) there are
             * duplicate event_id and tag_id combinations in the pivot table.
             * In order to avoid duplicate tags being listed when looking at
             * the tags attribute, all entries are associated with a cerf_id
             * foreign key. When the tags for an event looked up, the tags for
             * the event according to only one CERF is looked up (see tags
             * relation in Event model), so no duplicates are listed since the
             * CERF form is the only way for a user to associate an event with
             * a tag.
             */
            DB::statement('insert into events_assigned_tags (event_id, tag_id, approved) values (' .
                $event->id . ', ' .
                $tag->id . ', ' .
                'false);');
        }

        return redirect('/cerfs/overview')->with('status', 'Cerf submitted');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
