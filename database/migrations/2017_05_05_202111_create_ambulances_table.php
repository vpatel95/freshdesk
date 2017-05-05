<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbulancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulances', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('h_id');
            $table->string('vehicle_no')->unique();
            $table->string('contact');
            $table->boolean('occupied')->default(false);
            $table->timestamps();
        });

        Schema::table('ambulances', function(Blueprint $table) {
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('ambulances');
    }
}
