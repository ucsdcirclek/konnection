<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use Faker\Factory as Faker;

use App\Event;

class EventsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('events')->delete();

        for ($i = 0; $i < 10; $i++) {
            $start_time = Carbon::instance($faker->dateTimeBetween('now', '3 days'));
            $end_time = Carbon::now()->addHours(3);
            $close_time = Carbon::now()->subDay();
            $open_time = Carbon::now();

            Event::create(
                array(
                    'creator_id' => 1,
                    'title' => $faker->sentence,
                    'description' => $faker->text,
                    'event_location' => $faker->address,
                    'meeting_location' => $faker->streetName,
                    'start_time' => $start_time->toIso8601String(),
                    'end_time' => $end_time->toIso8601String(),
                    'close_time' => $close_time->toIso8601String(),
                    'open_time' => $open_time->toIso8601String()
                )
            );
        }
    }

}