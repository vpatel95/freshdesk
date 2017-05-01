<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('h_id')->unique();
            $table->string('govt_id_no')->unique();
            $table->string('id_type');
            $table->string('name');
            $table->string('gender');
            $table->string('specialization');
            $table->string('contact');
            $table->integer('rating');
            $table->timestamps();
        });

        Schema::table('doctors', function(Blueprint $table) {
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('h_id')->references('id')->on('hospitals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('doctors');
    }
}
