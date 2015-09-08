<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KiwanisAttendee;

class KiwanisAttendeesController extends Controller
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
        return view('pages.kiwanisattendees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        /*
         * Creates Kiwanis Family Club attendees.
         */
        if(array_key_exists('kiwanis_club_name', $input))
        {
            foreach($input['kiwanis_club_name'] as $index => $kiwanis_club)
            {
                $kiwanisAttendeeAttributes = [
                    'cerf_id' => session()->get('cerf_id'),
                    'name' => $kiwanis_club,
                    'members_attended' => $input['num_members'][$index]
                ];

                KiwanisAttendee::create($kiwanisAttendeeAttributes);
            }
        }

        return redirect()->action('CerfsController@overview');
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
