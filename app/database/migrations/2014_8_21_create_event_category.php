<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventCategory extends Migration
{

    /*Run Migration*/
    public function up()
    {
        //Was unsure when to make something "unsigned" or "nulable" as you did.  
        Schema::create(
            'event_category',
            function (Blueprint $table) {


                $table->string('name');
                $table->text('description')->nullable();
                $table->softDeletes();
                //$table->timestamps();
                $table->foreign('creator_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
                                        }
                         );
    }


    /*Reverse Migrations*/
    public function down()
    {
        Schema::drop('event_category');
    }

}