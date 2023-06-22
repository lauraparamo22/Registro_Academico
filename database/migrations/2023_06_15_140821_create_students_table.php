<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id_Student');
            $table->string('StudentCode')->unique();
            $table->string('Names');
            $table->string('LastNames');
            $table->string('DNI')->unique();
            $table->integer('Age');
            $table->string('Gender');
            $table->string('PhoneNumer');
            $table->string('EmailAddress')->unique();
            $table->string('Address');
            $table->string('City');
            $table->string('Municipality');
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
        Schema::dropIfExists('students');
    }
}
