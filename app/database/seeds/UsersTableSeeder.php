<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->delete();

        User::create(
            array(
                'username' => 'testuser',
                'email' => 'test@test.com',
                'password' => 'test1234',
                'password_confirmation' => 'test1234',
                'confirmed' => 1,
            )
        );

        for ($i = 0; $i < 10; $i++) {
            User::create(
                array(
                    'username' => $faker->userName,
                    'email' => $faker->email,
                    'password' => 'test1234',
                    'password_confirmation' => 'test1234',
                    'confirmed' => 1,
                )
            );
        }
    }

}