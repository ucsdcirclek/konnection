<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActivityRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Activity;
use App\EventRegistration as Registration;
use App\User;

class ActivitiesController extends Controller
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
        // TODO Customize checkbox for each registration.
        $registrations = Registration::where('event_id', session()->get('event_id'))->get();

        return view('pages.activities.create', compact('registrations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateActivityRequest|Request $request
     * @return Response
     */
    public function store(CreateActivityRequest $request)
    {
        $input = $request->all();

        foreach($input['user_id'] as $index => $user_id)
        {
            $activityAttributes = [
                'user_id' => $input['user_id'][$index] === 'null' ? null : $user_id,
                'cerf_id' => session()->get('cerf_id'),
                'name' => $input['name'][$index],
                'service_hours' => $input['service_hours'][$index],
                'planning_hours' => $input['planning_hours'][$index],
                'traveling_hours' => $input['traveling_hours'][$index],
                'admin_hours' => $input['admin_hours'][$index],
                'social_hours' => $input['social_hours'][$index],
                'mileage' => $input['mileage'][$index],
                'approved' => false
            ];

            Activity::create($activityAttributes);
        }

        return redirect()->action('KiwanisAttendeesController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
