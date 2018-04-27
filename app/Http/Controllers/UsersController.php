<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\User;
use App\Activity;
use App\Cerf;
use App\EventRegistration;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

use Imagine\Image\Point;
use Imagine\Image\Box;
use Imagine\Gd\Imagine;

use File;
use Intervention\Image\Facades\Image;
use \PHPExif\Reader\Reader;

use Hash;

class UsersController extends Controller {


    /**
     * Returns HTML markup for search results in users search form.
     *
     * @return \Illuminate\View\View
     */
    public function search()
    {
        $input = Input::get('input');

        // Populates search results of users with first and last names similar to user input.
        $user_results = User::where('first_name', 'LIKE', '%' . $input . '%')
                            ->orWhere('last_name', 'LIKE', '%' . $input . '%')
                            ->get();

        return view('search.users', compact('user_results'));
    }

    public function current() {

        // TODO Make users API for AJAX requests instead of using controller methods
        if (\Request::ajax()) {
            $user = \Auth::user();
            return json_encode($user);
        }
    }

    public function countHours(){
        $MRPStart = new Carbon('first day of March 2016');
        $MRPFinish = new Carbon('last day of February 2017');

        $userid = \Auth::user()->id;
        $activities = Activity::where('approved', true)->where('user_id', $userid)->get();
        $serviceHours = 0;
        $leadershipHours = 0;
        $fellowshipHours = 0;
        $miles = 0;
        foreach($activities as $activity)
        {
            $cerf = Cerf::find($activity->cerf_id);
            $event = Event::find($cerf->event_id);
            if ($event->start_time >= $MRPStart && $event->end_time <= $MRPFinish)
            {
                $serviceHours += $activity->service_hours + $activity->planning_hours + $activity->traveling_hours;
                $leadershipHours += $activity->admin_hours;
                $fellowshipHours += $activity->social_hours;
                $miles += $activity->mileage;
            }
        }

        return array($serviceHours, $leadershipHours, $fellowshipHours, $miles);
    }

    public function getEvents() {
        $userid = \Auth::user()->id;
        $eventregs = EventRegistration::where('user_id', $userid)->get();
        $events = array();
        $now = Carbon::now();
        foreach($eventregs as $eventreg)
        {
            $temp = Event::find($eventreg->event_id); /*->where('start_time', '>=', $now)->get();*/
            if ($temp != null && $temp->start_time >= $now) {
                array_push($events, $temp);
            }

        }
        return $events;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $user = \Auth::user();
        $countArray = $this->countHours();
        $events = $this->getEvents();
        return view('pages.settings.account', compact('user', 'countArray', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $req
     * @return Response
     * @internal param int $id
     */
	public function update(UpdateUserRequest $req)
	{
        // Only take acceptable input
		$input = $req->only('avatar', 'password', 'email', 'phone', 'first_name', 'last_name');

        // Removes null and empty strings to prevent empty passwords from being hashed and put into the database.
        $filtered_input = array_filter($input);

        if (array_key_exists('password', $filtered_input))
            $filtered_input['password'] = Hash::make($req->password);

        if (array_key_exists('avatar', $filtered_input)) {
            $image = $this->cropAvatar();

            if (!$image)
                redirect()->action('UsersController@edit')
                          ->withErrors(['error', 'Something went wrong! Image was too big or format was not supported. Please try another image.']);
        }

        // Update user
        \Auth::user()->update($filtered_input);
        return redirect()->action('UsersController@edit')->with('message', 'Your profile has been updated.');
	}

    /**
     * Crops avatar image to square and corrects orientation.
     *
     * @return void
     */
    private function cropAvatar() {

        // Gets full path of uploaded avatar, creates Imagine object to manipulate image.
        $avatarPath = \Auth::user()->avatar->url();
        $image = Image::make(public_path() . $avatarPath);

        $image->fit(300);

        $image->save(public_path() . $avatarPath);

        return $image;
    }
}
