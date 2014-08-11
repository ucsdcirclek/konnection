<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'events',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('creator_id')->unsigned();
                $table->text('description')->nullable();
                $table->string('event_location')->nullable();
                $table->string('meeting_location')->nullable();
                $table->dateTime('start_time');
                $table->dateTime('end_time');
                $table->dateTime('close_time')->nullable();
                $table->softDeletes();
                $table->timestamps();
                $table->foreign('creator_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            }
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }

}
