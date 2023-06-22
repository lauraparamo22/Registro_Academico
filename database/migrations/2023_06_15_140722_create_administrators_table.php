<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id_Administrator');
            $table->string('AdministratorCode')->unique();
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
            $table->integer('id_User')->unsigned();
            $table->foreign('id_User')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('administrators');
    }
}
