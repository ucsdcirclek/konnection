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
            $table->integer('reporter_id')->unsigned();
            $table->decimal('amount_raised')->default(0.00);
            $table->decimal('amount_spent')->default(0.00);
            $table->decimal('net_profit')->default(0.00);;
            $table->text('funds_purpose')->nullable();          // Where do the funds go?
            $table->text('summary')->nullable();                // Event summary.
            $table->text('strengths')->nullable();
            $table->text('weaknesses')->nullable();
            $table->text('reflection')->nullable();             // How to improve event?
            $table->boolean('approved');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('event_id')
                ->references('id')
                ->on('events');

            $table->foreign('reporter_id')
                  ->references('id')
                  ->on('users');
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

        // Cannot add and drop columns in same migration, so separate migrations
        Schema::table('activity_log', function(Blueprint $table) {
            $table->dropForeign('activity_log_user_id_foreign');
            $table->dropColumn('user_id');

            $table->dropForeign('activity_log_event_id_foreign');
            $table->dropColumn('event_id');
        });

        // Handles home club attendance section of CERF.
        Schema::table('activity_log', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned()->index()->nullable()->after('id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->integer('cerf_id')->unsigned()->after('user_id');
            $table->foreign('cerf_id')
                  ->references('id')
                  ->on('cerfs')
                  ->onDelete('cascade');

            $table->string('name')->after('cerf_id');
            $table->boolean('approved')->after('mileage');

            $table->float('planning_hours')->default(0.0)->after('service_hours');
            $table->float('traveling_hours')->default(0.0)->after('planning_hours');
        });

        Schema::table('event_tags', function(Blueprint $table)
        {
            $table->integer('category_id')->unsigned()->after('id');

            $table->foreign('category_id')
                  ->references('id')
                  ->on('event_categories')
                  ->onDelete('cascade');
        });

        Schema::table('events', function(Blueprint $table)
        {
            $table->integer('chair_id')->unsigned()->nullable()->after('creator_id');

            $table->foreign('chair_id')
                  ->references('id')
                  ->on('users');
        });

        Schema::table('events_assigned_tags', function(Blueprint $table) {
            $table->integer('cerf_id')->unsigned();
            $table->foreign('cerf_id')
                  ->references('id')
                  ->on('users');

            $table->boolean('approved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_log', function(Blueprint $table)
        {
            $table->dropForeign('activity_log_cerf_id_foreign');
            $table->dropColumn('cerf_id');
            $table->dropColumn('name');
            $table->dropColumn('approved');
            $table->dropColumn('planning_hours');
            $table->dropColumn('traveling_hours');
        });

        Schema::table('activity_log', function(Blueprint $table) {
            $table->integer('event_id')->unsigned()->nullable()->after('user_id');
            $table->foreign('event_id')
                  ->references('id')->on('events')
                  ->onDelete('cascade');
        });

        Schema::table('event_tags', function(Blueprint $table)
        {
            $table->dropForeign('event_tags_category_id_foreign');
            $table->dropColumn('category_id');
        });

        Schema::table('events', function(Blueprint $table)
        {
            $table->dropForeign('events_chair_id_foreign');
            $table->dropColumn('chair_id');
        });

        Schema::table('events_assigned_tags', function(Blueprint $table)
        {
            $table->dropForeign('events_assigned_tags_cerf_id_foreign');
            $table->dropColumn('cerf_id');

            $table->dropColumn('approved');
        });

        Schema::drop('kiwanis_attendees');
        Schema::drop('cerfs');
    }
}
