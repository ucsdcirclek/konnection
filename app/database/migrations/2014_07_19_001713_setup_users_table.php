<?php
use Illuminate\Database\Migrations\Migration;

/**
 * Converted from Zizaco/Confide
 */
class SetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->rememberToken();
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
