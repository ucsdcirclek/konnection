<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;

use Carbon\Carbon;

use App\Event;

class EventsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.calendar');
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
        $event = Event::findBySlug($slug);
        $event->load('creator', 'registrations', 'guests');

        // Look for events in the upcoming week
        $range = [
            Carbon::now(),
            Carbon::now()->addWeek()
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
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
