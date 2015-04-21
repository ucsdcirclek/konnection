<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\EventRegistration;

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
                    'event_id' => $i
                )
            );
        }
    }

}