<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IntegrateActivityAndTags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events_assigned_tags', function(Blueprint $table)
		{
            $table->integer('event_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('event_id')
                ->references('id')->on('events')
                ->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('event_tags');
		});
        Schema::table('activity_log', function(Blueprint $table)
        {
            $table->integer('event_id')->unsigned()->nullable()->after('user_id');
            $table->foreign('event_id')
                ->references('id')->on('events')
                ->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events_assigned_tags');
        Schema::table('activity_log', function(Blueprint $table)
        {
            $table->dropForeign('activity_log_event_id_foreign');
            $table->dropColumn('event_id');
        });
	}

}
