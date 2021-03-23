<?php

namespace App\Http\Controllers;
use DB;
use App\Models\SpotModel;
use App\Models\TombolSpot;
use App\Models\TempatWisataModel;
use Illuminate\Http\Request;

class SpotController extends Controller
{	

	public function SpotArrays()
	{
		$spotArrays = SpotModel::all();
		// dd($tempatWisataArrays);
		return view('spot', compact('spotArrays'));
	}

	public function SpotSelects($id_req)
	{	
		$spotArrays = SpotModel::select('*')
		->where('id_tempat_wisata', '=', $id_req)
		->get();	

		// $tombolArrays = TombolSpot::select('*')
		// ->where('id_tempat_wisata', '=', $id_req)
		// ->get();	

		// $tombolArrays = DB::table('tombol_spots')
		// ->join('spot_models_tests as t1', 'id_in', '=', 't1.id_spot')
		// ->join('spot_models_tests as t2', 'id_own', '=', 't2.id_spot')
		// ->select('tombol_spots.*', 't1.nama_spot as nama_in', 't2.nama_spot as nama_own')
		// ->get();

		$tombolArrays = TombolSpot::select('tombol_spots.*', 't1.nama_spot as nama_in', 't2.nama_spot as nama_own')
		->join('spot_models as t1', 'tombol_spots.id_in', '=', 't1.id_spot')
		->join('spot_models as t2', 'tombol_spots.id_own', '=', 't2.id_spot')
		->where('tombol_spots.id_tempat_wisata','=',$id_req)
		// ->select('tombol_spots.*', 't1.nama_spot as nama_in', 't2.nama_spot as nama_own')
		->get();

		$namaTempatWisataArrays = TempatWisataModel::select('nama_tempat_wisata')
		->where('id','=',$id_req)
		->get();

		// $namaTempatWisata = SpotModelsTest::select('t1.nama_tempat_wisata')
		// ->join('tempat_wisata_models as t1', 'spot_models_tests.id_tempat_wisata', '=', 't1.id')
		// ->get();
		// dd($namaTempatWisata);

		// $spotArrays = TombolSpot::with('SpotModelsTest')->get();

		// $spotArrays = SpotModelsTest::where('id_tempat_wisata', $id_req)->first();		
		// dd($tombolArrays);
		// return view('spot', ["spotArrays"=>$spotArrays, "id_req"=>$id_req]);
		return view('spot', compact('spotArrays','id_req','tombolArrays','namaTempatWisataArrays'));
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
		SpotModel::create([
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
	public function getSpot($id){

		$spotModel = SpotModel::select('*')
		->where('id_spot', '=', $id)
		->get();
		return $spotModel[0]->toJson();


	}	
	public function update(Request $request){				
		$request->validate([
			'nama_spot' => 'required'
		]);
		SpotModel::where('id_spot',$request->id_spot)
		->update([
			'nama_spot'=>$request->nama_spot,
			'link_video_pagi'=>$request->link_vid_pagi,
			'link_suara_pagi'=>$request->link_aud_pagi,
			'angin_pagi'=>$request->angin_pagi,
			'suhu_pagi'=>$request->suhu_pagi,
			'permukaan_pagi'=>$request->permukaan_pagi,
			'link_video_sore'=>$request->link_vid_sore,
			'link_suara_sore'=>$request->link_aud_sore,
			'angin_sore'=>$request->angin_sore,
			'suhu_sore'=>$request->suhu_sore,
			'permukaan_sore'=>$request->permukaan_sore,
		]);
		return redirect("/tempat-wisata/$request->id_tempat_wisata")->with('status','Spot Berhasil Diperbarui.');
	}
	public function destroy(Request $request){
		// dd($request->id_hapus);

		SpotModel::where('id_spot', $request->id_hapus)->delete();
		// dd($request->id_tempat_wisata_hapus);
		// SpotModelsTest::destroy($request->id_hapus);
		return redirect("/tempat-wisata/$request->id_tempat_wisata_hapus")->with('status','Spot Berhasil Dihapus.');
	}
	public function tambahTombol(Request $request){
		dd($request);

	}
}
