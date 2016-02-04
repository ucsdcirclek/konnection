<?php

namespace App\Api\Transformers;

use App\Event;
use League\Fractal\TransformerAbstract;

class EventTransformer extends TransformerAbstract
{
    public function transform(Event $event)
    {
        return array(
            'id' => (int) $event->id,
            'creator_id' => (int) $event->creator_id,
            'chair_id' => (int) $event->chair_id,
            'type_id' => (int) $event->type_id,
            'slug' => $event->slug,
            'title' => $event->title,
            'description' => $event->description,
            'event_location' => $event->event_location,
            'meeting_location' => $event->meeting_location,
            'start_time' => $event->start_time,
            'end_time' => $event->end_time,
            'open_time' => $event->open_time,
            'close_time' => $event->close_time,
            'hidden' => (int) $event->hidden,
            'created_at' => $event->created_at
        );
    }
}
