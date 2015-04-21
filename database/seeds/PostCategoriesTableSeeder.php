<?php

use Illuminate\Database\Seeder;

use App\PostCategory;

class PostCategoriesTableSeeder extends Seeder
{

    public function run()
    {
        PostCategory::create(
            array(
                'title' => 'District',
                'description' => 'District updates'
                )
        );

        PostCategory::create(
            array(
                'title' => 'Service',
                'description' => 'Service updates'
                )
        );

        PostCategory::create(
            array(
                'title' => 'Leadership',
                'description' => 'Leadership updates'
            )
        );

        PostCategory::create(
            array(
                'title' => 'Fellowship',
                'description' => 'Fellowship updates'
            )
        );
    }

}