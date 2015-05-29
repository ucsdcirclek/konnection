<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Event;
use App\EventRegistration;
use App\GuestRegistration;

use Carbon\Carbon;

class EventRegistrationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($slug)
    {
        $event = Event::findBySlug($slug);

        // Check if event is open for registration
        $now = Carbon::now();
        if (!($now > $event->open_time && $now < $event->close_time)) {
            abort(403, 'Event is not open for registration!');
        }

        // Create registration
        if (!\Auth::check()) {
            // Register as guest
            $input = \Request::all();
            $input['event_id'] = $event->id;
            $reg = GuestRegistration::create($input);
        } else {
            // Register as user
            $input = \Request::all();
            $input['user_id'] = \Auth::id();
            $input['event_id'] = $event->id;
            $reg = EventRegistration::create($input);
        }

        return $reg;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($slug, $id)
    {
        $event = Event::findBySlug($slug);

        if ($id == 'self' && \Auth::check()) {
            $reg = EventRegistration::where('user_id', '=', \Auth::id())
                ->where('event_id', '=', $event->id)
                ->update(\Request::all());
        } else {
            $reg = EventRegistration::find($id)->update(\Request::all());
        }

        if ($reg)
            return response('Registration updated!');
        else
            abort(409, 'There was an issue updating the registration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($slug, $id)
    {
        $event = Event::findBySlug($slug);

        if ($id == 'self') {
            if (\Auth::check()) {
                EventRegistration::where('user_id', '=', \Auth::id())
                    ->where('event_id', '=', $event->id)->delete();
            }
        } else {
            EventRegistration::destroy($id);
        }
    }

}
