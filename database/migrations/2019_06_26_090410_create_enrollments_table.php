<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('DOB');
            $table->string('gender');
            $table->string('phone');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('citizen_id');
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('user_id');
            $table->string('english');
            $table->string('photo');
            $table->string('attachment'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
