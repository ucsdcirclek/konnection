<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Event;

class EventsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('pages.calendar');
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
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
        $event = Event::findBySlug($slug);
        $event->load('creator', 'registrations', 'guests');

        // Look for events in the upcoming week
        $range = [
            Carbon::now(),
            Carbon::now()->addWeek()
        ];

        $upcoming_events = Event::whereBetween('start_time', $range)
            ->get()
            ->sortBy('start_time')
            ->groupBy(
                function ($date) {
                    return Carbon::parse($date->start_time)->format('l'); // grouping data by day
                }
            );

		return view('pages.event', compact('event', 'upcoming_events'));
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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
