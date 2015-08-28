<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Event;
use App\User;

class CerfsController extends Controller {

    // TODO Add authentication checks to all actions.
    // TODO Remember to use eager loading when passing data to views.

    /**
     * Display events that require CERFs.
     *
     * @return \Illuminate\View\View
     */
    public function overview()
    {
        // TODO Only check events created after the CERFs system is implemented.

        // Finds IDs of all events that do not have an associated CERF.
        $event_ids_without_cerfs = Event::select('events.id')
                                        ->leftJoin('cerfs', 'events.id', '=', 'cerfs.event_id')
                                        ->whereNull('cerfs.id')
                                        ->get();

        // Retrieves events without CERFs based on ID. Casts to array to pass to foreach loop in view.
        $events_without_cerfs = Event::find($event_ids_without_cerfs->toArray());

        return view('pages.cerfs.overview', compact('events_without_cerfs'));
    }

    /**
     * Redirects to CERF creation form with details of event to be CERFed.
     *
     * @param $id
     * @return mixed
     */
    public function select($id)
    {
        // Uses Session::put instead of flashing to avoid create form crash when refreshed.
        Session::put('event_id', $id);

        return Redirect::to('cerfs/create');
    }

	/**
	 * Display all CERFs.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('pages.cerfs.index');
	}

    /**
     * Show multi-page form for creating a new CERF.
     * Event details automatically filled in from previous overview page.
     *
     * @param $event
     * @return Response
     */
	public function create()
	{
        // Gets ID of event put into session by @select.
        $event = Event::find(Session::get('event_id'));

        $chair = null;

        // Finds chair of event.
        if (!is_null($event->chair_id)) {
            $chair = Event::find($event->chair_id);
        }

        return view('pages.cerfs.create', compact('event', 'chair'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        // TODO Remember to assign reporter_id foreign key based on currently signed in user.
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
