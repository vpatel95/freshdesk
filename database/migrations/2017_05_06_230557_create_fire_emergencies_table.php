<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFireEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_emergencies', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('f_id');
            $table->bigInteger('u_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('address');
            $table->timestamps();
        });

        Schema::table('fire_emergencies', function(Blueprint $table) {
            $table->foreign('f_id')->references('id')->on('fire_stations');
            $table->foreign('u_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire_emergencies');
    }
}
