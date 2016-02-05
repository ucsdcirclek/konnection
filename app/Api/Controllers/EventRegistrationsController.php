<?php

namespace App\Api\Controllers;

use App\Event;
use App\EventRegistration;
use App\GuestRegistration;
use App\Http\Requests;

use Auth;

use Carbon\Carbon;
use Dingo\Api\Exception\StoreResourceFailedException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Api\Transformers\EventRegistrationTransformer;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

/**
 * Event registrations resource representation. Requires user to be
 * authenticated, and can only remove registrations that the user owns.
 *
 * @Resource("EventRegistrations", uri="/events/{slug}/registrations")
 */
class EventRegistrationsController extends APIController
{

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
        $event = Event::findBySlug($slug);
        $now = Carbon::now();

        // Checks whether event is open for registration by checking whether
        // the current time is between the event's sign-up open and close
        // times.
        if (!($now > $event->open_time && $now < $event->close_time))
            throw new AccessDeniedHttpException('Event is not open for registration!');

        $input = $request->all();
        $input['event_id'] = $event->id;

        if (!Auth::check()) {

            // If the user isn't logged in, then make a guest registration>
            return GuestRegistration::create($input);
        } else {
            // Otherwise the user is logged in, and tie the registration to
            // the user ID.
            $input['user_id'] = Auth::id();

            // Checks whether a registration already exists with the user_id
            // for the same event, and if there is then this is a duplicate
            // registration.
            if (EventRegistration::where('user_id', $input['user_id'])
                ->where('event_id', $input['event_id'])
                ->first()) {
                throw new StoreResourceFailedException('User is already registered for this event!');
            }

            $registration = EventRegistration::create($input);
        }

        return $this->response->item($registration, new EventRegistrationTransformer);
    }

    /**
     * Updates a registration. Most commonly used for updating the
     * registration's photographer, writer, or driver statuses.
     *
     * @Patch("/events/{slug}/registrations/{id}")
     *
     * @param $slug
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function update($slug, $id)
    {
        $event = Event::findBySlug($slug);

        if ($id === 'self' && Auth::check()) {
            $registration = EventRegistration::where('user_id', '=', Auth::id())
                                             ->where('event_id', '=', $event->id)
                                             ->update(\Request::all());
        } else {
            $registration = EventRegistration::find($id)->update(\Request::all());
        }

        if ($registration)
            return response()->json(['message' => 'Registration updated!']);
        else
            throw new ConflictHttpException('There was an issue updating the registration!');

    }

    /**
     * Deletes a registration.
     *
     * @Delete("/events/{slug}/registrations/{id}")
     *
     * @param $slug
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function delete($slug, $id)
    {
        $event = Event::findBySlug($slug);

        if ($id == 'self') {
            // If |id| is set to self, then gets authenticated user's ID and
            // deletes registration for that user and event IDs combination.
            if (Auth::check())
                EventRegistration::where('user_id', '=', Auth::id())
                                 ->where('event_id', '=', $event->id)
                                 ->delete();
        } else {
            // Otherwise, deletes an event registration based on ID.
            EventRegistration::destroy($id);
        }

        return $this->response->noContent();
    }
}
