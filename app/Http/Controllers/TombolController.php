<?php

namespace App\Http\Controllers;
use App\Models\TombolSpot;
use Illuminate\Http\Request;

class TombolController extends Controller
{
	public function tambahTombol(Request $request)
	{						
		$request->validate([
			'spot_for' => 'required',
			'spot_in' => 'required',			
			'x_pos' => 'required',
			'y_pos' => 'required',
			'z_pos' => 'required',
			'x_rot' => 'required',
			'y_rot' => 'required',
			'z_rot' => 'required'			
		]);
		// dd($request);
		TombolSpot::create([
			'id_own' => $request->spot_for,
			'id_in' =>  $request->spot_in,
			'id_tempat_wisata' => $request->id_tempat_wisata,
			'x_pos' => $request->x_pos,
			'y_pos' => $request->y_pos,
			'z_pos' => $request->z_pos,
			'x_rot' => $request->x_rot,
			'y_rot' => $request->y_rot,
			'z_rot' => $request->z_rot
		]);
		return redirect("/tempat-wisata/$request->id_tempat_wisata")->with('status_tombol','Tombol Spot Berhasil Ditambahkan.');
	}
	public function getTombol($id){
		$tombolModel = TombolSpot::select('*')
		->where('id_tombol', '=', $id)
		->get();			
		// dd($tombolModel[0]);
		return $tombolModel[0]->toJson();

	}
	public function update(Request $request){				
		$request->validate([
			'spot_for' => 'required',
			'spot_in' => 'required',			
			'x_pos' => 'required',
			'y_pos' => 'required',
			'z_pos' => 'required',
			'x_rot' => 'required',
			'y_rot' => 'required',
			'z_rot' => 'required'	
		]);
		// dd($request);
		TombolSpot::where('id_tombol',$request->id_tombol)
		->update([
			'id_own' => $request->spot_for,
			'id_in' =>  $request->spot_in,
			'id_tempat_wisata' => $request->id_tempat_wisata,
			'x_pos' => $request->x_pos,
			'y_pos' => $request->y_pos,
			'z_pos' => $request->z_pos,
			'x_rot' => $request->x_rot,
			'y_rot' => $request->y_rot,
			'z_rot' => $request->z_rot
		]);
		return redirect("/tempat-wisata/$request->id_tempat_wisata")->with('status_tombol','Tombol Spot Berhasil Diperbarui.');
	}

	public function destroy(Request $request){
		TombolSpot::where('id_tombol', $request->id_tombol_hapus)->delete();		
		return redirect("/tempat-wisata/$request->id_tombol_tempat_wisata_hapus")->with('status_tombol','Tombol Spot Berhasil Dihapus.');
	}
}
