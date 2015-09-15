<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cache;
use Carbon\Carbon;

use DB;
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
        $posts = Post::where('category_id', '!=', 5)->latest()->take(2)->get();

        // Get slides
        $slides = Slide::all()->sortBy('priority');

        // Get featured event
        $featured = $this->getFeaturedEvent();

        return view('pages.home', compact('days', 'posts', 'slides', 'featured'));
    }

    /**
     * Gets the featured event
     *
     * @return mixed
     */
    protected function getFeaturedEvent()
    {
        // Get event ID or latest event if doesn't exist
        $event_id = Cache::get(EventsController::FEATURED_EVENT_ID_KEY, DB::table('events')->max('id'));

        $event = Event::find($event_id);

        // Get max. 160 characters from description as summary if not already set
        $summary = Cache::get(
            EventsController::FEATURED_EVENT_SUMMARY_KEY,
            substr(strip_tags($event->description), 0, 160) . '...'
        );

        $result = new \stdClass();
        $result->event = $event;
        $result->summary = $summary;

        return $result;
    }

}
