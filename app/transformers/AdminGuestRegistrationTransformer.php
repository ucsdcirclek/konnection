<?php

class AdminGuestRegistrationTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(guestRegistration $registration)
    {
        return array(
            'id' => (int)$registration->id,
            'name' => "{$registration->user->first_name} {$registration->user->last_name}",
            'phone' => $registration->user->phone,
            'event_id' => (int)$registration->event_id,
            'driver_status' => (bool)$registration->driver_status,
            'passengers' => $registration->passengers,
            'created_at' => $registration->created_at->toISO8601String(),
            'updated_at' => $registration->updated_at->toISO8601String()
        );
    }

}
