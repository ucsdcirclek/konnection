<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    public function up()
    {  
        Schema::create('posts',function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('content')->nullable();
                $table->foreign('post_category');
                    ->references('category')->on('post')
                    ->onDelete('cascade');
                $table->timestamps();
                $table->foreign('user_id')
                ->references('id')->on('users');
            }
        );
    }
    public function down()
    {
        Schema::drop('posts');
    }

}