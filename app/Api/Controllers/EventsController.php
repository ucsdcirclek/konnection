<?php

namespace App\Api\Controllers;

use Dingo\Api\Exception\ResourceException;
use Illuminate\Http\Request;

use App\Event;
use App\Http\Requests;
use App\Api\Transformers\EventTransformer;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * @return \Dingo\Api\Http\Response
     * @internal param Request $request
     */
    public function index()
    {
        $events = Event::orderBy('start_time', 'desc')->paginate();
        return $this->response->paginator($events, new EventTransformer);
    }

    /**
     * Provides details of an event given its ID.
     *
     * @Get("/events/{id]")
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $event = Event::find($id);
        if (!$event) throw new NotFoundHttpException('Event does not exist.');

        return $event;
    }

    /**
     * Retrieves events within a range specified by the request parameters
     * |start_date| and |end_date|.
     *
     * @param Request $request
     * @return mixed
     */
    public function getEventsInRange(Request $request)
    {
        if (!$request->has('start_date') || !$request->has('end_date'))
            throw new ResourceException('Missing start_date and end_date parameters in request.');

        $range = [];

        // Converts input into minimum and maximum values.
        $range[] = Carbon::parse($request->input('start_date'))->toDateTimeString();
        $range[] = Carbon::parse($request->input('end_date'))->toDateTimeString();

        // Returns all events within a range specified by minimum and
        // maximum values computed above from request.
        return Event::whereBetween('start_time', $range)->where('hidden', false)->get();
    }

    /**
     * Retrieves all events on a day specified as a request parameter. A date
     * in UTC representing the beginning of the day must be passed in.
     *
     * @Post("/events/event_date")
     *
     * @param Request $request
     */
    public function getEventsOnDate(Request $request)
    {
        if (!$request->has('date'))
            throw new ResourceException('Missing date parameter in request.');

        // Date in request must be in UTC and must represent the very beginning
        // of the day.
        $beginningOfDay = Carbon::parse($request->input('date'));
        $endOfDay = $beginningOfDay->addDay();

        return Event::whereBetween('start_time', [$beginningOfDay, $endOfDay])->where('hidden', false)->get();
    }
}
