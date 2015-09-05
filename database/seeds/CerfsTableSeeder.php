<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Cerf;
use App\Event;
use App\User;

class CerfsTableSeeder extends Seeder {

    public function run() {

        $faker = Faker::create();
        
        DB::table('cerfs')->delete();

        // Gets array of event IDs.
        $event_ids = Event::all()->lists('id')->toArray();
        shuffle($event_ids);

        $user_ids = User::all()->lists('id')->toArray();
        shuffle($user_ids);

        // TODO Events have many CERFs, so make sure to update seeder accordingly.

        // Each CERF should only have one event. Some events do not have an associated CERF.
        for ($counter = 0; $counter < 10; $counter++) {

            $event_id = $event_ids[$counter];
            $user_id = $user_ids[$counter];

            Cerf::create(
                array(
                    'event_id' => $event_id,
                    'reporter_id' => $user_id,
                    'amount_raised' => $faker->randomFloat(2, 0, 1000),
                    'amount_spent' => $faker->randomFloat(2, 0, 1000),
                    'net_profit' => $faker->randomFloat(2, 0, 1000),
                    'funds_purpose' => $faker->text,
                    'summary' => $faker->text,
                    'strengths' => $faker->text,
                    'weaknesses' => $faker->text,
                    'reflection' => $faker->text,
                    'approved' => false
                )
            );
        }
    }
}
