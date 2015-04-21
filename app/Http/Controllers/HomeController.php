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
        $events = Event::whereBetween(
            [
                Carbon::now()->startOfDay(),
                Carbon::now()->addDays(2)->endOfDay()
            ]
        )
            ->sortBy('start_time')
            ->get()
            ->groupBy(
                function ($date) {
                    return Carbon::parse($date->start_time)->format('l'); // grouping data by day
                }
            );

        // Get posts
        $posts = Post::latest()->take(3)->get();

        // Get slides
        $slides = Slide::all();

        return view('pages.home', compact('events', 'posts', 'slides'));
    }

}
