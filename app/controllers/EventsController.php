<?php

class EventsController extends \BaseController
{

    /**
     * Display a listing of events.
     * Can accept a "from" and "to" date parameter.
     *
     * @return Response
     */
    public function index()
    {
        if (Input::get('from') && Input::get('to')) {
            $range = array();

            // Add "From" date to query
            $range[] = Carbon\Carbon::createFromFormat(Carbon::ISO8601, Input::get('from'))->toDateTimeString();

            // Add "To" date to query
            $range[] = Carbon\Carbon::createFromFormat(Carbon::ISO8601, Input::get('to'))->toDateTimeString();

            return CalendarEvent::whereBetween('start_time', $range)->get();
        } else {
            return CalendarEvent::paginate(10);
        }
    }

    /**
     * Display the specified event.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        try {
            return CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}
