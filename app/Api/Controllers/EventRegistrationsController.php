<?php

namespace App\Api\Controllers;

use App\Api\Transformers\EventRegistrationTransformer;
use App\Event;
use App\EventRegistration;
use App\Http\Requests;
use Carbon\Carbon;
use Dingo\Api\Exception\DeleteResourceFailedException;
use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tymon\JWTAuth\Facades\JWTAuth;


/**
 * Event registrations resource representation. Requires user to be
 * authenticated, and can only remove registrations that the user owns.
 *
 * @Resource("EventRegistrations", uri="/events/{slug}/registrations")
 */
class EventRegistrationsController extends APIController
{
    /**
     * Lists all registrations for event with given slug.
     *
     * @Get("/events/{slug}/registrations")
     *
     * @param $slug
     * @return \Dingo\Api\Http\Response
     */
    public function index($slug)
    {
        $event = Event::findBySlug($slug);

        if (!$event)
            throw new NotFoundHttpException;

        $registrations = EventRegistration::where('event_id', $event->id)->latest()->get();
        return $this->response->collection($registrations, new EventRegistrationTransformer);
    }

    /**
     * Stores a registration, associating the newly created registration with
     * the user and the event.
     *
     * @Post("/events/{slug}/registrations/create")
     *
     * @param Request $request
     * @param $slug
     * @return \Dingo\Api\Http\Response
     */
    public function store(Request $request, $slug)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $event = Event::findBySlug($slug);
        $now = Carbon::now();

        // Throws error if the current time is outside the event's sign-up
        // window.
        if (!($now > $event->open_time && $now < $event->close_time))
            throw new StoreResourceFailedException('Event is not open for registration!');

        $input = $request->all();
        $input['event_id'] = $event->id;
        $input['user_id'] = $user->id;

        $duplicate = EventRegistration::where('user_id', $user->id)
                                      ->where('event_id', $event->id)
                                      ->first();

        // Throws error if a registration with the same user ID for the same
        // event ID already exists.
        if ($duplicate)
            throw new StoreResourceFailedException('User is already registered for this event!');

        $registration = EventRegistration::create($input);
        return $this->response->item($registration, new EventRegistrationTransformer);
    }

    /**
     * Updates a registration. Most commonly used for updating the
     * registration's photographer, writer, or driver statuses.
     *
     * @Patch("/events/{slug}/registrations/{id}")
     *
     * @param Request $request
     * @param $slug
     * @return \Dingo\Api\Http\Response
     * @internal param $id
     */
    public function update(Request $request, $slug)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $event = Event::findBySlug($slug);

        $result = EventRegistration::where('user_id', '=', $user->id)
                                   ->where('event_id', '=', $event->id)
                                   ->update($request->all());

        if ($result)
            return response()->json(['Registration updated successfully.'], 200);
        else
            throw new UpdateResourceFailedException;
    }

    /**
     * Deletes a registration.
     *
     * @Delete("/events/{slug}/registrations/{id}")
     *
     * @param $slug
     * @return \Dingo\Api\Http\Response
     * @internal param $id
     */
    public function destroy($slug)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $event = Event::findBySlug($slug);

        $result = EventRegistration::where('user_id', '=', $user->id)
                                   ->where('event_id', '=', $event->id)
                                   ->delete();

        if ($result)
            return response()->json(['Registration removed successfully.'], 200);
        else
            throw new DeleteResourceFailedException;
    }
}
