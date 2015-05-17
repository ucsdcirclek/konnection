<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->delete();

        $officerRole = Role::find(2);
        $memberRole = Role::find(3);

        $user = User::create(
            array(
                'username' => 'testuser',
                'first_name' => 'Test',
                'last_name' => 'User',
                'email' => 'test@test.com',
                'password' => Hash::make('test1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => 1
            )
        );

        User::find($user->id)->attachRole($officerRole);

        for ($i = 0; $i < 10; $i++) {
            $user = User::create(
                array(
                    'username' => str_replace('.', "", $faker->unique()->userName),
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->unique()->email,
                    'password' => Hash::make('test1234'),
                    'confirmation_code' => md5(uniqid(mt_rand(), true)),
                    'confirmed' => 1
                )
            );

            User::find($user->id)->attachRole($memberRole);
        }
    }

}