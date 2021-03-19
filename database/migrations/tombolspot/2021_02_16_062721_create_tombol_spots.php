<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTombolSpots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombol_spots', function (Blueprint $table) {
            $table->increments('id_tombol');
            $table->timestamps();
            $table->bigInteger('id_in')->unsigned();
            $table->index('id_in');
            // $table->foreign('id_in')->references('id_spot')->on('spot_models')->onDelete('cascade');
            $table->bigInteger('id_own')->unsigned();
            $table->index('id_own');
            // $table->foreign('id_own')->references('id_spot')->on('spot_models')->onDelete('cascade');
            $table->string('x_pos');
            $table->string('y_pos');
            $table->string('z_pos');
            $table->string('x_rot');
            $table->string('y_rot');
            $table->string('z_rot');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tombol_spots');
    }
}
