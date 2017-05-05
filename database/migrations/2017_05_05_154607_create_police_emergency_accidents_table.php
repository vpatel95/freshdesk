<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliceEmergencyAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police_emergency_accidents', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('u_id');
            $table->bigInteger('h_id');
            $table->bigInteger('ps_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('accident_address');
            $table->timestamps();
        });

        Schema::table('police_emergency_accidents', function (Blueprint $table) {
            $table->foreign('u_id')->references('id')->on('users');
            $table->foreign('h_id')->references('id')->on('hospitals');
            $table->foreign('ps_id')->references('id')->on('police_stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('police_emergency_accidents');
    }
}
