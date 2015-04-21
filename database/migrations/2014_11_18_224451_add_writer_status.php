<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddWriterStatus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('event_registrations', function(Blueprint $table)
		{
            $table->boolean('writer_status')->default(0)->after('photographer_status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('event_registrations', function(Blueprint $table)
		{
			$table->dropColumn('writer_status');
		});
	}

}
