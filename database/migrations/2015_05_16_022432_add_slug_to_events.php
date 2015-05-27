<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToEvents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('events', function(Blueprint $table)
        {
            $table->string('slug')->after('creator_id');
        });

        // Set any missing slugs
        foreach (\App\Event::all() as $event)
        {
            $event->sluggify();
            $event->save();
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('events', function(Blueprint $table)
        {
            $table->dropColumn('slug');
        });
	}

}
