<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Event;
use App\Post;
use App\Slide;

class HomeController extends Controller
{

    public function index()
    {

        // Get events
        $days = Event::whereBetween(
            'start_time',
            [
                Carbon::now('America/Los_Angeles'),
                Carbon::now('America/Los_Angeles')->addDays(2)->endOfDay()
            ]
        )
            ->get()
            ->sortBy('start_time')
            ->groupBy(
                function ($date) {
                    return Carbon::parse($date->start_time, 'UTC')
                        ->setTimezone('America/Los_Angeles')->format('l'); // grouping data by day
                }
            );

        // Get posts
        $posts = Post::latest()->take(2)->get();

        // Get slides
        $slides = Slide::all()->sortBy('priority');

        return view('pages.home', compact('days', 'posts', 'slides'));
    }

}
