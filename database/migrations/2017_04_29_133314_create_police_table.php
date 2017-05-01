<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('ps_id');
            $table->string('name');
            $table->string('gender');
            $table->string('govt_id_no')->unique();
            $table->string('id_type');
            $table->string('contact')->unique();
            $table->timestamps();
        });

        Schema::table('police', function(Blueprint $table) {
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('police');
    }
}
