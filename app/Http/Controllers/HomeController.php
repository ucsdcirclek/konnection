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
        $upcoming = $this->getUpcomingEvents();

        // Get posts
        $posts = Post::latest()->take(2)->get();

        // Get slides
        $slides = Slide::all();

        return view('pages.home', compact('upcoming', 'posts', 'slides'));
    }

    /**
     * Gets upcoming events for specified days. Defaults to 3 days
     *
     * @return array
     */
    protected function getUpcomingEvents($days = 3)
    {
        $events = Event::whereBetween(
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

        $result = [];

        // Get events for the next 3 days (including nulls)
        $date = Carbon::now('America/Los_Angeles');

        for ($i = 0; $i < $days; $i++) {
            $day = $date->format('l');

            // Set day or null if not found
            $result[$day] = isset($events[$day]) ? $events[$day] : null;

            $date->addDay();
        }

        return $result;
    }
}
