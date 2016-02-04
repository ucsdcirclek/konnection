<?php

namespace App\Api\Transformers;

use App\Event;
use League\Fractal\TransformerAbstract;

class EventTransformer extends TransformerAbstract
{
    public function transform(Event $event)
    {
        return [
            'id' => (int) $event->id,
            'title' => $event->title
        ];
    }
}
