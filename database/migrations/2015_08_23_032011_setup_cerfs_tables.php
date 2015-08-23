<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupCerfsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Handles all CERFs.
		Schema::create('cerfs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->string('chair');
            $table->string('reporter');                         // Person who fills out CERFs.
            $table->decimal('amount_raised')->default(0.00);
            $table->decimal('amount_spent')->default(0.00);
            $table->decimal('net_profit')->default(0.00);;
            $table->text('funds_purpose')->nullable();          // Where do the funds go?
            $table->text('summary')->nullable();                // Event summary.
            $table->text('strengths')->nullable();
            $table->text('weaknesses')->nullable();
            $table->text('reflection')->nullable();             // How to improve event?

            $table->softDeletes();
			$table->timestamps();

            $table->foreign('event_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
		});

        // Handles Kiwanis family attendance section of CERF.
        Schema::create('kiwanis_attendees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('cerf_id')->unsigned();
            $table->string('name');
            $table->integer('members_attended');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('cerf_id')
                  ->references('id')
                  ->on('cerfs')
                  ->onDelete('cascade');
        });

        // Handles home club attendance section of CERF.
        Schema::table('activity_log', function(Blueprint $table)
        {
            $table->float('planning_hours')->default(0.0)->after('service_hours');
            $table->float('traveling_hours')->default(0.0)->after('planning_hours');
        });

        // To reorganize tags into Service, Leadership, Fellowship, and Miscellaneous categories.
        Schema::table('event_tags', function(Blueprint $table)
        {
            $table->string('category')->after('description');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('kiwanis_attendees');
		Schema::drop('cerfs');

        Schema::table('activity_log', function(Blueprint $table)
        {
            $table->dropColumn('planning_hours');
            $table->dropColumn('traveling_hours');
        });

        Schema::table('event_tags', function(Blueprint $table)
        {
            $table->dropColumn('category');
        });
	}

}
