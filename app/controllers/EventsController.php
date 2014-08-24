<?php

class EventsController extends \BaseController
{

    /**
     * Display a listing of events
     *
     * @return Response
     */
    public function index()
    {
        return CalendarEvent::paginate(10);
    }

    /**
     * Store a newly created event in storage.
     *
     * @return Response
     */
    public function store()
    {
        $event = new CalendarEvent;

        if (!$event->save()) {
            $error = $event->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new event.', $error);
        }

        return CalendarEvent::find($event->id);
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

    /**
     * Update the specified event in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        try {
            $event = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $event->title = Input::get('username');
        $event->description = Input::get('username');
        $event->event_location = Input::get('event_location');
        $event->meeting_location = Input::get('meeting_location');
        $event->start_time = Input::get('start_time');
        $event->end_time = Input::get('end_time');
        $event->close_time = Input::get('close_time');

        $event->updateUniques();

        return $event;
    }

    /**
     * Remove the specified event from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $event = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $event->delete();

        return Response::make(null, 204);
    }

}
