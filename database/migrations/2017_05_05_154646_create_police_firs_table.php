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
            $table->string('category');
            $table->text('description');
            $table->string('media');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

        Schema::table('police_firs', function(Blueprint $table) {
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
        Schema::dropIfExists('police_firs');
    }
}
