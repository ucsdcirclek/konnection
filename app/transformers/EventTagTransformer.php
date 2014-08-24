<?php

class EventTagTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(Event $event)
    {
        return array(
            'id' => (int)$event->id,
            'name' => $event->name,
            'abbreviation' => $event->abbreviation,
            'description' => $event->description,
            'created_at' => $event->created_at,
            'updated_at' => $event->updated_at
        );
    }

}
