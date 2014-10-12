<?php

class AdminEventsController extends \EventsController
{

    /**
     * Store a newly created event in storage.
     *
     * @return Response
     */
    public function store()
    {
//        if (!Entrust::can('manage_system'))
//        {
//            throw new Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException('You are not an administrator!');
//        }

        $event = new CalendarEvent;

        $event->creator_id = API::user()->id;
        $event->title = Input::get('title');
        $event->description = Input::get('description');
        $event->event_location = Input::get('event_location');
        $event->meeting_location = Input::get('meeting_location');
        $event->start_time = Input::get('start_time');
        $event->end_time = Input::get('end_time');
        $event->close_time = Input::get('close_time');

        if (!$event->save()) {
            $error = $event->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new event.', $error);
        }

        return CalendarEvent::find($event->id);
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
        
        foreach (Input::all() as $key => $value) {
            if(!is_null($value)) $event->{$key} = $value;
        }

        $event->updateUniques();

        if ($error = $event->errors()->all(':message'))
        {
            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not update event.', $event);
        }

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
