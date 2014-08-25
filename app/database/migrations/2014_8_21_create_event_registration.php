<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventRegistration extends Migration
{

    /*Run Migration*/
    public function up()
    {
        //Was unsure when to make something "unsigned" or "nulable" as you did.  
        Schema::create(
            'event_registration',
            function (Blueprint $table) {
                $table->increments('event_id');
                $table->integer('registration_id')->unsigned();

                $table->integer('user_id'); //should this be a primary?

                $table->integer('guest_status');
                $table->integer('driver_status');
                $table->integer('passenger_number');
                $table->integer('photographer_status');
                $table->integer('chair_status');
                $table->softDeletes();
                $table->timestamps();
                
                $table->foreign('event_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            }
        );
    }


    /*Reverse Migrations*/
    public function down()
    {
        Schema::drop('event_registration');
    }

}