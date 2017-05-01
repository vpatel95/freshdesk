<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->bigInteger('id')->primary();
            $table->string('govt_id_no')->unique();
            $table->string('id_type');
            $table->string('name');
            $table->string('gender');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->integer('age');
            $table->string('phone_no')->unique();
            $table->string('emergency_contact');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::table('user_details', function(Blueprint $table) {
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
        Schema::dropIfExists('user_details');
    }
}
