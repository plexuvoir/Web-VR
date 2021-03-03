<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot_models', function (Blueprint $table) {
           $table->increments('id_spot');
           $table->timestamps();
           $table->bigInteger('id_tempat_wisata')->unsigned();
           $table->index('id_tempat_wisata');
           $table->foreign('id_tempat_wisata')->references('id')->on('tempat_wisata_models')->onDelete('cascade');
           $table->string('nama_spot');
           $table->string('link_video_pagi');
           $table->string('link_suara_pagi');           
           $table->string('suhu_pagi');
           $table->string('angin_pagi');
           $table->string('permukaan_pagi');
           $table->string('link_video_sore');
           $table->string('link_suara_sore');           
           $table->string('suhu_sore');
           $table->string('angin_sore');
           $table->string('permukaan_sore');        
           $table->boolean('is_primary');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_models');
    }
}
