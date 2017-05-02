<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalEmergencyAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_emergency_accidents', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('u_id');
            $table->bigInteger('h_id');
            $table->bigInteger('ps_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('self')->default(false);
            $table->timestamps();
        });

        Schema::table('hospital_emergency_accidents', function(Blueprint $table) {
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
        Schema::dropIfExists('hospital_emergency_accidents');
    }
}
