<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity');
        });
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('label', 255);
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('city', 255);
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('address', 255);
            $table->string('phone_number', 15);
            $table->string('email')->unique();
            $table->string('ip');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('travel_date');    
            $table->string('from_city', 255);    
            $table->string('to_city', 255);    
            $table->decimal('price');    
            $table->string('information');    
            $table->integer('max_persons');   
            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
