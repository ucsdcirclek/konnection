<?php

class EventTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(CalendarEvent $event)
    {
        return array(
            'id' => (int)$event->id,
            'creator_id' => (int)$event->creator_id,
            'title' => $event->title,
            'description' => $event->description,
            'event_location' => $event->event_location,
            'meeting_location' => $event->meeting_location,
            'start_time' => $event->start_time->toISO8601String(),
            'end_time' => $event->end_time->toISO8601String(),
            'open_time' => empty($event->open_time) ? null : $event->open_time->toISO8601String(),
            'close_time' => $event->close_time->toISO8601String(),
            'created_at' => $event->created_at->toISO8601String(),
            'updated_at' => $event->updated_at->toISO8601String()
        );
    }

}
