<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{
    public function up()
    {  
        Schema::create('profiles',function (Blueprint $table) {
                $table->integer('id')->unsigned();
                $table->string('college')->nullable();
                $table->text('bio')->nullable();
                $table->timestamps();
                $table->foreign('id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            }
        );
    }
    public function down()
    {
        Schema::drop('profiles');
    }

}
