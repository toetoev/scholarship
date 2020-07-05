<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('eligibility');
            $table->string('inclusion');  
            $table->dateTime('deadline');
            $table->dateTime('course_start');
            $table->dateTime('course_end');
            $table->string('logo');
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('major_id');
            $table->unsignedBigInteger('grade_id');
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
        Schema::dropIfExists('scholarships');
    }
}
