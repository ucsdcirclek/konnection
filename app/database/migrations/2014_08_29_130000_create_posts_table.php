<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts',function (Blueprint $table) {
                $table->increments('id');
                $table->integer('author_id')->unsigned()->index();
                $table->integer('category_id')->unsigned();
                $table->string('title');
                $table->text('content');
                $table->timestamps();
                $table->foreign('category_id')
                    ->references('id')->on('post_categories');
                $table->foreign('author_id')
                    ->references('id')->on('users');
            }
        );
    }
    public function down()
    {
        Schema::drop('posts');
    }

}
