<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Http\Requests;
use App\Profile;
use App\Activity;
use App\EventRegistration;
use App\Event;

use Auth;
use DB;

class ProfilesController extends Controller
{

   /* public function temp($id){
        $profile = Profile::find($id);

        return view('pages.profile.profile', compact('profile'));
    }*/

    public function __construct() {

        // All Profile actions require user to be logged in.
        $this->middleware('auth');

        $this->middleware('admin', ['only' => ['index', 'destroy', 'approve']]);
    }

    public function getEvents() {
        $userid = \Auth::user()->id;
        $eventregs = EventRegistration::where('user_id', $userid)->get();
        $events = array();
        $now = Carbon::now();
        foreach($eventregs as $eventreg)
        {
            $temp = Event::find($eventreg->event_id); /*->where('start_time', '>=', $now)->get()->first();*/
            if ($temp != null) {
                array_push($events, $temp);
            }

        }
        return $events;
    }

    public function countHours(){
        $userid = \Auth::user()->id;
        $activities = Activity::where('approved', true)->where('user_id', $userid)->get();
        $serviceHours = 0;
        $leadershipHours = 0;
        $fellowshipHours = 0;
        $miles = 0;
        foreach($activities as $activity)
        {
            $serviceHours += $activity->service_hours + $activity->planning_hours + $activity->traveling_hours;
            $leadershipHours += $activity->admin_hours;
            $fellowshipHours += $activity->social_hours;
            $miles += $activity->mileage;
        }

        return array($serviceHours, $leadershipHours, $fellowshipHours, $miles);
    }

    public function show(){
        $user = \Auth::user();
        $profile = Profile::find($user->id);
        $countArray = $this->countHours();
        $events = $this->getEvents();

        return view('pages.profile.profile', compact('user', 'profile', 'countArray', 'events'));
    }
}
