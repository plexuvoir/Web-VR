<?php

namespace App\Http\Controllers;
use App\Models\SpotModelsTest;
use Illuminate\Http\Request;

class SpotController extends Controller
{	

	public function SpotArrays()
	{
		$spotArrays = SpotModelsTest::all();
		// dd($tempatWisataArrays);
		return view('spot', compact('spotArrays'));
	}

	public function SpotSelects($id_req)
	{	
		$spotArrays = SpotModelsTest::select('nama_spot')
		->where('id_tempat_wisata', '=', $id_req)
		->get();	
		// $spotArrays = SpotModelsTest::where('id_tempat_wisata', $id_req)->first();		
		// dd($spotArrays);
		// return view('spot', ["spotArrays"=>$spotArrays, "id_req"=>$id_req]);
		return view('spot', compact('spotArrays','id_req'));
	}
	public function tambah(Request $request)
	{						
		$request->validate([
			'nama_spot' => 'required',
			// 'link_vid_pagi' => 'required',
			// 'link_aud_pagi' => 'required',
			// 'angin_pagi' => 'required',
			// 'suhu_pagi' => 'required',
			// 'permukaan_pagi' => 'required',
			// 'link_vid_sore' => 'required',
			// 'link_aud_sore' => 'required',
			// 'angin_sore' => 'required',
			// 'suhu_sore' => 'required',
			// 'permukaan_sore' => 'required'
		]);
		// dd($request);
		SpotModelsTest::create([
			'nama_spot' => $request->nama_spot,
			'link_video_pagi' => $request->link_vid_pagi,
			'link_suara_pagi' => $request->link_aud_pagi,
			'angin_pagi' => $request->angin_pagi,
			'suhu_pagi' => $request->suhu_pagi,
			'permukaan_pagi' => $request->permukaan_pagi,
			'link_video_sore' => $request->link_vid_sore,
			'link_suara_sore' => $request->link_aud_sore,
			'angin_sore' => $request->angin_sore,
			'suhu_sore' => $request->suhu_sore,
			'permukaan_sore' => $request->permukaan_sore,
			'id_tempat_wisata' => $request->id_tempat_wisata
		]);
		return redirect("/tempat-wisata/$request->id_tempat_wisata")->with('status','Spot Berhasil Ditambahkan.');
	}
}
