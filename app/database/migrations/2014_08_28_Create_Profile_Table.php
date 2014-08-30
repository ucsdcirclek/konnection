<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileTable extends Migration
{
    public function up()
    {  
        Schema::create('profile',function (Blueprint $table) {
                $table->increments('id');
                $table->string('college');
                $table->text('bio')->nullable();
                $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            }
        );
    }
    public function down()
    {
        Schema::drop('profile');
    }

}