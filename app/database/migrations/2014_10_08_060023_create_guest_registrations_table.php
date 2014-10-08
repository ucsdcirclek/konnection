<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuestRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guest_registrations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('event_id')->unsigned();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone');
			$table->boolean('driver_status')->default(0);
			$table->integer('passengers')->unsigned()->default(0);
			$table->timestamps();
            $table->foreign('event_id')
                ->references('id')->on('events')
                ->onDelete('cascade');
		});
        Schema::table('event_registrations', function($table)
        {
            $table->dropColumn('guest_status');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guest_registrations');
	}

}
