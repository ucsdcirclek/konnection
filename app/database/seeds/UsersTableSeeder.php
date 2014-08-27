<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->delete();

        $officerRole = Role::find(2);
        $memberRole = Role::find(3);

        $user = new User;

        $user->username = 'testuser';
        $user->email = 'test@test.com';
        $user->password = 'test1234';
        $user->password_confirmation = 'test1234';
        $user->confirmed = 1;
        $user->save();

        User::find($user->id)->attachRole($officerRole);

        for ($i = 0; $i < 10; $i++) {
            $user->username = $faker->userName;
            $user->email = $faker->email;
            $user->password = 'test1234';
            $user->password_confirmation = 'test1234';
            $user->confirmed = 1;
            $user->save();

            User::find($user->id)->attachRole($memberRole);
        }
    }

}