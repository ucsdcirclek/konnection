<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Event;

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
            $open_time = new DateTime();

            Event::create(
                array(
                    'creator_id' => 1,
                    'title' => $faker->sentence,
                    'description' => $faker->text,
                    'event_location' => $faker->address,
                    'meeting_location' => $faker->streetName,
                    'start_time' => $start_time->format(DateTime::ISO8601),
                    'end_time' => $end_time->format(DateTime::ISO8601),
                    'close_time' => $close_time->format(DateTime::ISO8601),
                    'open_time' => $open_time
                )
            );
        }
    }

}