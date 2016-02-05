<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use App\GuestRegistration;
use Carbon\Carbon;
use Auth;
use App\EventRegistration;

class EventRegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {
        $event = Event::findBySlug($slug);
        $now = Carbon::now();

        // Checks whether event is open for registration by checking whether
        // the current time is between the event's sign-up open and close
        // times.
        if (!($now > $event->open_time && $now < $event->close_time))
            abort(403, 'Event is not open for registration!');

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
                abort(403, 'User is already registered for this event!');
            }

            $registration = EventRegistration::create($input);
        }

        return redirect()->action('EventsController@show', $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, $id)
    {
        $event = Event::findBySlug($slug);
        $input = $request->except(['_method', '_token']);

        if ($id === 'self' && Auth::check()) {
            $registration = EventRegistration::where('user_id', '=', Auth::id())
                                             ->where('event_id', '=', $event->id)
                                             ->update($input);
        } else {
            $registration = EventRegistration::find($id)->update($input);
        }

        if ($registration)
            return redirect()->action('EventsController@show', $slug);
        else
            abort(409, 'There was an issue updating the registration!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($slug, $id)
    {
        // TODO Put under authentication middleware.
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

        return redirect()->action('EventsController@show', $slug);
    }
}
