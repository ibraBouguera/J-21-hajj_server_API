<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHajdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajds', function (Blueprint $table) {
            $table->increments('id');
            $table->string("first_name");
            $table->string('last_name');
            $table->unsignedInteger('agency_id');
            $table->text('username');
            $table->text('password');
            $table->foreign('agency_id')->references('id')->on('agencies');
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
        Schema::dropIfExists('hajds');
    }
}
