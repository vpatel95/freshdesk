<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliceFirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police_firs', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('u_id');
            $table->bigInteger('ps_id');
            $table->string('category');
            $table->text('witness');
            $table->text('accused');
            $table->text('description');
            $table->string('media');
            $table->dateTime('date_time');
            $table->string('location');
            $table->timestamps();
        });

        Schema::table('police_firs', function(Blueprint $table) {
            $table->foreign('u_id')->references('id')->on('users');
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
        Schema::dropIfExists('police_firs');
    }
}
