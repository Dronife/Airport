<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AirlineSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airline_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rise_air_station_id')->unsigned();
            $table->integer('land_air_station_id')->unsigned();
            $table->integer('airline_id')->unsigned();
            $table->foreign('rise_air_station_id')->references('id')->on('air_stations')->onDelete('cascade');
            $table->foreign('land_air_station_id')->references('id')->on('air_stations')->onDelete('cascade');
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->date('time');
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
        //
    }
}
