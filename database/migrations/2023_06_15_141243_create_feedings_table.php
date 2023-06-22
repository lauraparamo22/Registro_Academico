<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedings', function (Blueprint $table) {
            $table->increments('id_Feeding');
            $table->string('FeedingCode');
            $table->date('Date');
            $table->string('Shift');
            $table->integer('id_Hosting')->unsigned();
            $table->foreign('id_Hosting')->references('id_Hosting')->on('hostings')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('feedings');
    }
}
