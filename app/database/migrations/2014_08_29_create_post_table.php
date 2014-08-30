<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration
{
    public function up()
    {  
        Schema::create('post',function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('content')->nullable();
                $table->text('post_category')->nullable();
                $table->timestamps();
                $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            }
        );
    }
    public function down()
    {
        Schema::drop('post_categories');
    }

}