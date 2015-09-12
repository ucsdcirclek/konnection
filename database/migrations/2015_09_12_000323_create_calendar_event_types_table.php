<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarEventTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_event_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('events', function(Blueprint $table) {
            $table->integer('type_id')->unsigned()->nullable()->after('chair_id');

            $table->foreign('type_id')
                ->references('id')
                ->on('calendar_event_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function(Blueprint $table) {
            $table->dropForeign('events_type_id_foreign');
            $table->dropColumn('type_id');
        });

        Schema::drop('calendar_event_types');
    }
}
