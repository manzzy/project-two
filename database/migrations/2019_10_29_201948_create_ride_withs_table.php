<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRideWithsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ride_withs', function (Blueprint $table) {
            $table->bigIncrements('rid');
            $table->string('starting_location');
            $table->string('destination');
            $table->float('price');
            $table->float('distacne');
            $table->integer('pid');
            $table->integer('did');
            $table->time('time');
            $table->date('date');
            $table->integer('rating');
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
        Schema::dropIfExists('ride_withs');
    }
}
