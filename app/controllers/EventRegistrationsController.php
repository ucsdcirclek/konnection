<?php

class EventRegistrationsController extends \BaseController
{

    /**
     * Display a listing of event registrations.
     *
     * @return Response
     */
    public function index($event_id)
    {
        try {
            $event = CalendarEvent::findOrFail($event_id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        return $event->registrations;
    }

    /**
     * Display the specified event registration.
     *
     * @param  int $id
     * @return Response
     */
    public function show($event_id, $reg_id)
    {
        try {
            return EventRegistration::findOrFail($reg_id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
    }

}
