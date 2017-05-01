<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFireStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_stations', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('branch_id');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('contact');
            $table->timestamps();
        });

        Schema::table('fire_stations', function(Blueprint $table) {
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire_stations');
    }
}
