<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon ;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->longText('userbio')->nullable();
            $table->string('occupation')->nullable();
            $table->string('country')->default('Pakistan');
            $table->string('city')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('interest')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            //$table->dateTime('lastseen')->default(0000-00-00);
            $table->timestamps();
            $table->dateTime('lastseen')->default(Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
