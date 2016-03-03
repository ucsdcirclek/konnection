<?php

namespace App\Http\Controllers;

use App\GuestRegistration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;

use App\Http\Requests\CreateGuestRegistrationRequest;

class GuestRegistrationsController extends Controller
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
     * @param CreateGuestRegistrationRequest|Request $request
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGuestRegistrationRequest $request, $slug)
    {
        $event = Event::findBySlug($slug);

        $input = $request->all();
        $input['event_id'] = $event->id;

        GuestRegistration::create($input);

        return redirect()->action('EventsController@show', $event->slug);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
