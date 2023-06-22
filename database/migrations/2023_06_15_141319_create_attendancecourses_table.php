<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendancecourses', function (Blueprint $table) {
            $table->increments('id_AttendanceCourse');
            $table->string('AttendanceCourseCode');
            $table->date('Date');
            $table->boolean('Condition');
            $table->integer('id_Student')->unsigned();
            $table->foreign('id_Student')->references('id_Student')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_Course')->unsigned();
            $table->foreign('id_Course')->references('id_Course')->on('courses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('attendancecourses');
    }
}
