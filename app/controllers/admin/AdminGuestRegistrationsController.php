<?php

class AdminGuestRegistrationsController extends \GuestRegistrationsController
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

        return $this->withCollection($event->guests, new AdminGuestRegistrationTransformer);
    }

    /**
     * Store a newly created event registration in storage.
     *
     * @return Response
     */
    public function store()
    {

        $registration = new GuestRegistration;

        if (!$registration->save()) {
            $error = $registration->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new registration.', $error);
        }

        return GuestRegistration::find($registration->id);
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
            $registration = GuestRegistration::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $registration->first_name = Input::get('first_name');
        $registration->last_name = Input::get('last_name');
        $registration->event_id = Input::get('event_id');
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
            $registration = GuestRegistration::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $registration->delete();

        return Response::make(null, 204);
    }

}
