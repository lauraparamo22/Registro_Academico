<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareergradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careergrades', function (Blueprint $table) {
            $table->increments('id_CareerGrade');
            $table->string('CareerGradeCode');
            $table->double('Grade');
            $table->integer('id_Student')->unsigned();
            $table->foreign('id_Student')->references('id_Student')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_Career')->unsigned();
            $table->foreign('id_Career')->references('id_Career')->on('careers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_Module')->unsigned();
            $table->foreign('id_Module')->references('id_Module')->on('modules')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('careergrades');
    }
}
