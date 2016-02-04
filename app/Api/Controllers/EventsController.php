<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Http\Requests;
use App\Api\Transformers\EventTransformer;

/**
 * @Resource('Events', uri='/events')
 */
class EventsController extends APIController
{
    public function index(Request $request)
    {
        $events = Event::all();
        return $this->response->collection($events, new EventTransformer);
    }
}
