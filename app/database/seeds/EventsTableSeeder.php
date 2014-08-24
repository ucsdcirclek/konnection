<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('events')->delete();

        for ($i = 0; $i < 10; $i++) {
            $start_time = $faker->dateTimeBetween('now', '10 years');
            $end_time = new DateTime((string) date_format($start_time, 'Y-m-d H:i:s'));
            $end_time->add(new DateInterval('PT10H'));
            $close_time = new DateTime((string) date_format($start_time, 'Y-m-d H:i:s'));
            $close_time->sub(new DateInterval('P10D'));

            CalendarEvent::create(
                array(
                    'creator_id' => 1,
                    'title' => $faker->sentence,
                    'description' => $faker->text,
                    'event_location' => $faker->address,
                    'meeting_location' => $faker->streetName,
                    'start_time' => $start_time,
                    'end_time' => $end_time,
                    'close_time' => $close_time
                )
            );
        }
    }

}