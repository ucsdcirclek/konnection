<?php

class AdminEventRegistrationsController extends \EventRegistrationsController
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

        return $this->withCollection($event->registrations, new AdminEventRegistrationTransformer);
    }

    /**
     * Store a newly created event registration in storage.
     *
     * @return Response
     */
    public function store()
    {

        $registration = new EventRegistration;

        if (!$registration->save()) {
            $error = $registration->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new registration.', $error);
        }

        return EventRegistration::find($registration->id);
    }

    /**
     * Update the specified event registration in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        try {
            $registration = EventRegistration::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $registration->user_id = Input::get('user_id');
        $registration->event_id = Input::get('event_id');
        $registration->chair_status = Input::get('chair_status');
        $registration->guest_status = Input::get('guest_status');
        $registration->photographer_status = Input::get('photographer_status');
        $registration->driver_status = Input::get('driver_status');
        $registration->passengers = Input::get('passengers');

        $registration->updateUniques();

        return $registration;
    }

    /**
     * Remove the specified event registration from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $registration = EventRegistration::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $registration->delete();

        return Response::make(null, 204);
    }

}
