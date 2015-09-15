<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Cerf;
use App\KiwanisAttendee;

class KiwanisAttendeesTableSeeder extends Seeder {

    public function run() {

        DB::table('kiwanis_attendees')->delete();

        $faker = Faker::create();

        $cerf_ids = Cerf::all()->lists('id')->toArray();

        for ($counter = 0; $counter < 30; $counter++) {
            $rand_cerf_id = $cerf_ids[array_rand($cerf_ids)];

            KiwanisAttendee::create(
                array(
                    'cerf_id' => $rand_cerf_id,
                    'name' => $faker->city . ' Kiwanis Club',
                    'members_attended' => $faker->randomDigit
                )
            );
        }
    }
}
