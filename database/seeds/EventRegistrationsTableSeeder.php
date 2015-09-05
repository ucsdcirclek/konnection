<?php

use Illuminate\Database\Seeder;

use App\EventRegistration;
use App\Event;
use App\User;

class EventRegistrationsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('event_registrations')->delete();

        $event_ids = Event::all()->lists('id')->toArray();
        $user_ids = User::all()->lists('id')->toArray();

        for ($counter = 0; $counter < 50; $counter++) {

            $rand_event_id = $event_ids[array_rand($event_ids)];
            $rand_user_id = $user_ids[array_rand($user_ids)];

            if (EventRegistration::where('user_id', '=', $rand_user_id)
                                 ->where('event_id', '=', $rand_event_id)
                                 ->exists()) {
                continue;
            }

            EventRegistration::create(
                array(
                    'user_id' => $rand_user_id,
                    'event_id' => $rand_event_id
                )
            );
        }
    }

}
