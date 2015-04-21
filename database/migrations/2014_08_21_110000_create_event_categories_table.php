<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventCategoriesTable extends Migration
{

    /*Run Migration*/
    public function up()
    {
        //Was unsure when to make something "unsigned" or "nulable" as you did.  
        Schema::create(
            'event_categories',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->text('description')->nullable();
                $table->softDeletes();
                $table->timestamps();
            }
        );
    }


    /*Reverse Migrations*/
    public function down()
    {
        Schema::drop('event_categories');
    }

}