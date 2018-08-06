<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("stating");
            $table->unsignedInteger("arriving");
            $table->unsignedInteger("transportation_id");
            $table->dateTime('travel_time');


            $table->foreign("stating")->references('id')->on('places')->onDelete('cascade');
            $table->foreign("arriving")->references('id')->on('places')->onDelete('cascade');
            $table->foreign("transportation_id")->references('id')->on('transportations')->onDelete('cascade');

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
        Schema::dropIfExists('travels');
    }
}
