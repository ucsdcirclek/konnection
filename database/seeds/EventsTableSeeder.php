<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use Faker\Factory as Faker;

use App\Event;
use App\User;

class EventsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('events')->delete();

        $user_ids = User::all()->lists('id');

        for ($i = 0; $i < 10; $i++) {
            $rand_user_id = $user_ids[array_rand($user_ids)];

            $start_time = Carbon::instance($faker->dateTimeBetween('now', '10 days'));
            $end_time = Carbon::instance($start_time)->addHours(3);
            $close_time = $end_time;
            $open_time = Carbon::now();

            Event::create(
                array(
                    'creator_id' => $rand_user_id,
                    'title' => ucwords(implode(' ', $faker->words(3))),
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