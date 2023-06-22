<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentcareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollmentcareers', function (Blueprint $table) {
            $table->increments('id_EnrollmentCareer');
            $table->string('EnrollmentCareerCode');
            $table->integer('id_Student')->unsigned();
            $table->foreign('id_Student')->references('id_Student')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_Career')->unsigned();
            $table->foreign('id_Career')->references('id_Career')->on('careers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('enrollmentcareers');
    }
}
