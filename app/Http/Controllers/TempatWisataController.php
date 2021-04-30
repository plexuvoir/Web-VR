<?php

namespace App\Http\Controllers;

use App\Models\TempatWisataModel;
use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    public function TempatWisataArrays()
	{
		$tempatWisataArrays = TempatWisataModel::all();
		// dd($tempatWisataArrays);
		return view('admin-home', compact('tempatWisataArrays'));
	}

	public function tambah(Request $request)
	{
		// $tempatWisata = new TempatWisataModel;
		// $tempatWisata->nama_tempat_wisata= $request->nama_tempat_wisata;
		// $tempatWisata->save();		
		$request->validate([
			'nama_tempat_wisata' => 'required'
		]);
		TempatWisataModel::create([
			'nama_tempat_wisata' => $request->nama_tempat_wisata
		]);
		return redirect('/admin-home')->with('status','Tempat Wisata Berhasil Ditambahkan.');
	}
	public function destroy(Request $request)
	{
		TempatWisataModel::destroy($request->id_hapus);
		return redirect('/admin-home')->with('status','Tempat Wisata Berhasil Dihapus.');
	}

	public function update(Request $request){				
		$request->validate([
			'nama_tempat_wisata' => 'required'
		]);
		TempatWisataModel::where('id',$request->id)
		->update([
			'nama_tempat_wisata'=>$request->nama_tempat_wisata
		]);
		return redirect('/admin-home')->with('status','Tempat Wisata Berhasil Diperbarui.');

	}
	public function getTempatWisata($id){
		$tempatWisataModel = TempatWisataModel::select('*')
                           ->where('id', '=', $id)
                           ->get();
		return $tempatWisataModel[0]->toJson();
	}	
	public function tampilUserHome(){
		$tempatWisataArrays = TempatWisataModel::all();
		// dd($tempatWisataArrays);
		return view('user-home', compact('tempatWisataArrays'));
	}
}
