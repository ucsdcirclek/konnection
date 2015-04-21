<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventRegistrationsTable extends Migration
{

    /*Run Migration*/
    public function up()
    {
        //Was unsure when to make something "unsigned" or "nulable" as you did.  
        Schema::create(
            'event_registrations',
            function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->integer('event_id')->unsigned();
                $table->boolean('chair_status')->default(0);
                $table->boolean('guest_status')->default(0);
                $table->boolean('photographer_status')->default(0);
                $table->boolean('driver_status')->default(0);
                $table->integer('passengers')->default(0);
                $table->softDeletes();
                $table->timestamps();
                $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
                $table->foreign('event_id')
                    ->references('id')->on('events')
                    ->onDelete('cascade');
            }
        );
    }


    /*Reverse Migrations*/
    public function down()
    {
        Schema::drop('event_registrations');
    }

}