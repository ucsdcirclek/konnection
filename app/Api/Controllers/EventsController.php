<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Http\Requests;
use App\Api\Transformers\EventTransformer;
use Carbon\Carbon;

/**
 * Events resource representation. Only requires authentication for unsafe
 * methods, otherwise allows unauthenticated users read-only access.
 *
 * @Resource("Events", uri="/events")
 */
class EventsController extends APIController
{
    /**
     * Retrieves a list of events. If the |start| and |end| keys are present
     * in the request, then returns only the events in the range represented
     * by both keys, |start| being the minimum value in the range and |end|
     * the maximum value in the range. Otherwise, returns all events.
     *
     * @Get("/events")
     *
     * @param Request $request
     * @return \Dingo\Api\Http\Response
     */
    public function index(Request $request)
    {
        // Checks whether request has keys |start| and |end|.
        if ($request->has('start') && $request->has('end')) {
            $range = [];

            // Converts input into minimum and maximum values.
            $range[] = Carbon::parse($request->input('start'))->toDateTimeString();
            $range[] = Carbon::parse($request->input('end'))->toDateTimeString();

            // Returns all events within a range specified by minimum and
            // maximum values computed above from request.
            $events = Event::whereBetween('start_time', $range)->where('hidden', false)->get();
        } else {
            // If keys are not present, then retrieves all event.
            $events = Event::all();
        }

        // Returns events.
        return $this->response->collection($events, new EventTransformer);
    }
}
