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
        if (Input::get('start') && Input::get('end')) {
            $range = array();

            // Add "From" date to query
            $range[] = Carbon\Carbon::createFromFormat(\Carbon\Carbon::ISO8601, Input::get('start'))->toDateTimeString(
            );

            // Add "To" date to query
            $range[] = Carbon\Carbon::createFromFormat(\Carbon\Carbon::ISO8601, Input::get('end'))->toDateTimeString();

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

    /**
     * Display the person of contact
     *
     * @param  int $id
     * @return Response
     */
    public function contact($id)
    {
        try {
            $event = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }
        $array['data'] = $event->creator->toArray();
        $array['data']['avatar'] = Request::root() . $event->creator->avatar->url();

        return $array;
    }

    /**
     * Registers user for event
     *
     * @param $id
     * @return \LaravelBook\Ardent\Ardent|\LaravelBook\Ardent\Collection
     */
    public function register($id)
    {
        try {
            $event = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        // Make sure event is open for registration
        if (Carbon::now() < $event->open_time || Carbon::now() > $event->close_time) {
            throw new Dingo\Api\Exception\StoreResourceFailedException('The user is not allowed to register for this
            event at this time.');
        }

        // Register user
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
     * Registers guest for event
     *
     * @param $id
     * @return \LaravelBook\Ardent\Ardent|\LaravelBook\Ardent\Collection
     */
    public function guestRegister($id)
    {
        try {
            $event = CalendarEvent::findOrFail($id);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
        }

        // Make sure event is open for registration
        if (Carbon::now() < $event->open_time || Carbon::now() > $event->close_time) {
            throw new Dingo\Api\Exception\StoreResourceFailedException('The user is not allowed to register for this
            event at this time.');
        }

        // Register guest
        $registration = new GuestRegistration;

        $registration->event_id = $id;
        $registration->first_name = Input::get('first_name');
        $registration->last_name = Input::get('last_name');
        $registration->phone = Input::get('phone');
        $registration->driver_status = is_null(Input::get('driver_status')) ? 0 : Input::get('driver_status');
        $registration->passengers = is_null(Input::get('passengers')) ? 0 : Input::get('passengers');

        if (!$registration->save()) {
            $error = $registration->errors()->all(':message');

            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not register user for event.', $error);
        }

        return GuestRegistration::find($registration->id);
    }

    /**
     * Edit registration
     *
     * @param $id
     * @return \LaravelBook\Ardent\Ardent|\LaravelBook\Ardent\Collection
     */
    public function updateRegister($id)
    {
        $registration = EventRegistration::whereEventId($id)->whereUserId(API::user()->id)->first();

        foreach (Input::all() as $key => $value) {
            if(!is_null($value)) $registration->{$key} = $value;
        }

        $registration->updateUniques();

        if ($error = $registration->errors()->all(':message')) {
            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not update registration.', $error);
        }

        return EventRegistration::find($registration->id);
    }

    /**
     * Unregister user for event
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function unregister($id)
    {
        $registration = EventRegistration::whereEventId($id)->whereUserId(API::user()->id);

        if ($registration->delete()) {
            return Response::make(null, 204);
        }

        throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException($e->getMessage());
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
