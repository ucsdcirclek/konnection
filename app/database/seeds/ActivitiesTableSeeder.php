<?php

use Faker\Factory as Faker;

class ActivitiesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            Activity::create(
                array(
                    'user_id' => $index,
                    'service_hours' => $faker->randomDigit,
                    'leadership_hours' => $faker->randomDigit,
                    'fellowship_hours' => $faker->randomDigit,
                    'mileage' => $faker->randomDigit,
                    'notes' => $faker->paragraph,
                )
            );
        }
    }

}