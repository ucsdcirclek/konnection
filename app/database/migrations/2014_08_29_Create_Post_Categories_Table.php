<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostCategoriesTable extends Migration
{
    public function up()
    {  
        Schema::create('post_categories',function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('description');
            }
        );
    }
    public function down()
    {
        Schema::drop('post_categories');
    }

}