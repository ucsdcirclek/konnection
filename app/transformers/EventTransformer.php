<?php

class EventTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(Event $event)
    {
        return array(
            'id' => (int)$event->id,
            'creator_id' => (int)$event->creator_id,
            'description' => $event->description,
            'event_location' => $event->event_location,
            'meeting_location' => $event->meeting_location,
            'start_time' => $event->start_time,
            'end_time' => $event->end_time,
            'close_time' => $event->close_time,
            'created_at' => $event->created_at,
            'updated_at' => $event->updated_at
        );
    }

}
