<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpotModelsTest extends Model
{
    protected $fillable = ['nama_spot','link_video_pagi','link_suara_pagi','angin_pagi','suhu_pagi','permukaan_pagi','link_video_sore','link_suara_sore','angin_sore','suhu_sore','permukaan_sore','id_tempat_wisata'];
}
