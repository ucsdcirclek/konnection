<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventRegistrationsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('event_registrations')->delete();

        for ($i = 1; $i <= 10; $i++) {

            EventRegistration::create(
                array(
                    'user_id' => $i,
                    'event_id' => $i,
                    'chair_status' => 1
                )
            );
        }
    }

}