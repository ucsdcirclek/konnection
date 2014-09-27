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

    public function register($id)
    {
        $registration = new EventRegistration;

        $registration->user_id = API::user()->id;
        $registration->event_id = $id;
        $registration->passengers = is_null(Input::get('passengers')) ? 0 : Input::get('passengers');

        if (!$registration->save()) {
            $error = $registration->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not register user for event.', $error);
        }

        return EventRegistration::find($registration->id);
    }

    /**
     * CERF an event
     *
     * @param $id
     * @return mixed
     * @throws Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function report($id)
    {
        try {
            $event = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        $activities = Input::get('activities');

        foreach ($activities as $activity) {
            $user_id = $activity['user_id'];
            $service_hours = $activity['service_hours'];
            $admin_hours = $activity['admin_hours'];
            $social_hours = $activity['social_hours'];
            $mileage = $activity['mileage'];
            $notes = $activity['notes'];

            Activity::create(
                array(
                    'user_id' => $user_id,
                    'event_id' => $event->id,
                    'service_hours' => $service_hours,
                    'admin_hours' => $admin_hours,
                    'social_hours' => $social_hours,
                    'mileage' => $mileage,
                    'notes' => $notes,
                )
            );
        }

        return $event->activities;
    }

}
