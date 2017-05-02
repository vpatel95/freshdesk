<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalEmergencyNearBiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_emergency_near_bies', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('u_id');
            $table->bigInteger('h_id');
            $table->string('disease');
            $table->json('tests');
            $table->dateTime('appointment_date');
            $table->boolean('self')->default(false);
            $table->timestamps();
        });

        Schema::table('hospital_emergency_near_bies', function(Blueprint $table) {
            $table->foreign('u_id')->references('id')->on('users');
            $table->foreign('h_id')->references('id')->on('hospitals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_emergency_near_bies');
    }
}
