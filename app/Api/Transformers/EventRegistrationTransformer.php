<?php

namespace App\Api\Transformers;

use App\EventRegistration;
use League\Fractal\TransformerAbstract;

class EventRegistrationTransformer extends TransformerAbstract
{
    public function transform(EventRegistration $registration)
    {
        return array(
            'id' => (int) $registration->id,
            'user_id' => (int) $registration->user_id,
            'event_id' => (int) $registration->event_id,
            'photographer_status' => (int) $registration->photographer_status,
            'writer_status' => (int) $registration->writer_status,
            'driver_status' => (int) $registration->driver_status,
            'created_at' => $registration->created_at->toDateTimeString()
        );
    }
}
