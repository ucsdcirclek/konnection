<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileTable extends Migration
{
    public function up()
    {  
        Schema::create('profiles',function (Blueprint $table) {
                $table->increments('id');
                $table->string('college');
                $table->text('bio')->nullable();
            }
        );
    }
    public function down()
    {
        Schema::drop('profiles');
    }

}