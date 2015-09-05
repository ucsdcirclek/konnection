<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $user_ids = User::all()->lists('id')->toArray();

        foreach (range(1,4) as $category_id) {
            for ($counter = 0; $counter < 5; $counter++) {

                $rand_user_id = $user_ids[array_rand($user_ids)];

                Post::create(
                    array(
                        'author_id' => $rand_user_id,
                        'category_id' => $category_id,
                        'title' => $faker->sentence(6),
                        'content' => $faker->text
                    )
                );

            }
        }


    }

}