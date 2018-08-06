<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelHajdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_hajds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('travel_id');
            $table->unsignedInteger('hajd_id');

            $table->foreign('hajd_id')->references('id')->on('hajds')->onDelete('cascade');;
            $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');;

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
        Schema::dropIfExists('travel_hajds');
    }
}
