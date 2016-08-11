<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use App\Activity;

class ProfilesController extends Controller
{


   /* public function temp($id){
        $profile = Profile::find($id);

        return view('pages.profile.profile', compact('profile'));
    }*/

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

        return view('pages.profile.profile', compact('user', 'profile', 'countArray'));
    }
}
