<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SaveFeaturedEventRequest;
use Cache;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;

use Carbon\Carbon;

use App\Event;
use App\EventType;

class EventsController extends Controller
{
    // TODO Form fields for creating and updating events should have default values.

    const FEATURED_EVENT_ID_KEY = 'featured-event:id';
    const FEATURED_EVENT_SUMMARY_KEY = 'featured-event:summary';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $types = EventTYpe::all()->lists('name');

        return view('pages.calendar', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateEventRequest $req)
    {
        $input = $req->all();

        // Makes sure chair_id enters database as an integer or null if left empty.
        strcmp($input['chair_id'], "") == 0 ? $input['chair_id'] = null
                                            : $input['chair_id'] = (int) $input['chair_id'];

        // Ensures database times are always in UTC.
        foreach ($input as $key => $value) {

            // Ensures only time fields are changed.
            if (!strpos($key, 'time')) {
                continue;
            }

            // Converts time from PST to UTC.
            $pst = new Carbon($value, 'America/Los_Angeles');
            $utc = $pst->setTimezone('UTC');

            // Sets date/time string back into values for database.
            $input[$key] = $utc->toDateTimeString();
        }

        $input['creator_id'] = \Auth::id(); // Set creator ID by default

        // Set default close time if needed
        if (!isset($input['close_time'])) {
            $input['close_time'] = $input['start_time'];
        }

        // Set default open time if needed
        if (!isset($input['open_time'])) {
            $input['open_time'] = Carbon::now();
        }

        // Create event
        $event = Event::create($input);

        return redirect()->action('EventsController@show', $event->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($slug)
    {
        // TODO Add a comments feed for each event.

        $event = Event::findBySlug($slug);

        // Check if exists
        if (!$event) {
            abort(404);
        }

        $event->load('creator', 'chair', 'registrations', 'guests');

        // Look for events in the upcoming week
        $range = [
            Carbon::now(),
            Carbon::now()->addDays(6)
        ];

        $upcoming_events = Event::whereBetween('start_time', $range)
            ->get()
            ->sortBy('start_time')
            ->groupBy(
                function ($date) {
                    return Carbon::parse($date->start_time)->timezone('UTC')
                        ->setTimezone('America/Los_Angeles')
                        ->format('l'); // grouping data by day
                }
            );

        return view('pages.event', compact('event', 'upcoming_events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($slug)
    {
        $event = Event::findBySlug($slug);

        $event->start_time = $event->start_time->setTimezone('America/Los_Angeles');
        $event->end_time = $event->end_time->setTimezone('America/Los_Angeles');
        $event->open_time = $event->end_time->setTimezone('America/Los_Angeles');
        $event->close_time = $event->end_time->setTimezone('America/Los_Angeles');

        return view('pages.admin.events.update', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(UpdateEventRequest $req, $slug)
    {
        $input = $req->all();

        // Ensures database times are always in UTC.
        foreach ($input as $key => $value) {

            // Ensures only time fields are changed.
            if (!strpos($key, 'time')) {
                continue;
            }

            // Converts time from PST to UTC.
            $pst = new Carbon($value, 'America/Los_Angeles');
            $utc = $pst->setTimezone('UTC');

            // Sets date/time string back into values for database.
            $input[$key] = $utc->toDateTimeString();
        }

        Event::findBySlug($slug)->update($input);

        return redirect()->action('EventsController@show', $slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $slug
     * @return Response
     */
    public function delete($slug)
    {
        if (Event::findBySlugOrFail($slug)->delete()) {
            return redirect()->action('EventsController@index');
        }
        else {
            return redirect('back')->withErrors('Cannot delete event!');
        }
    }

    public function feature(Request $request, $slug)
    {
        $event = Event::findBySlug($slug);
        return view('pages.admin.events.feature', compact('event'));
    }

    public function saveFeaturedEvent(SaveFeaturedEventRequest $request)
    {
        $event = $request->get('event');
        $summary = $request->get('summary');

        $summary = strip_tags($summary);

        // Cut off if larger than 160
        if (strlen($summary) > 160) {
            $summary = substr($summary, 0, 160) . '...';
        }

        // Save settings
        Cache::forever(self::FEATURED_EVENT_ID_KEY, $event);
        Cache::forever(self::FEATURED_EVENT_SUMMARY_KEY, $summary);

        return redirect('/');
    }

    public function registrations($slug)
    {
        $event = Event::findBySlug($slug);

        // Check if exists
        if (!$event) {
            abort(404);
        }

        $registrations = $event->allRegistrations();

        return view('pages.admin.events.registrations', compact('event', 'registrations'));
    }

}
