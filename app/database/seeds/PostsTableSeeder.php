<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,4) as $category_id) {
            foreach (range(1, 5) as $index) {
                Post::create(
                    array(
                        'author_id' => 1,
                        'category_id' => $category_id,
                        'title' => $faker->sentence(6),
                        'content' => $faker->text
                    )
                );

            }
        }


    }

}