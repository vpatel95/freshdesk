<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('name');
            $table->bigInteger('ps_id');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('contact');
            $table->json('specialization');
            $table->integer('rating');
            $table->timestamps();
        });

        Schema::table('hospitals', function(Blueprint $table) {
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
        Schema::dropIfExists('hospitals');
    }
}
