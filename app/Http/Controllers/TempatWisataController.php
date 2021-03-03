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
	public function destroy($id_req)
	{
		// $tempatWisataModel = TempatWisataModel::select('*')
  //                          ->where('id', '=', $id_req)
  //                          ->get();			
		// return $tempatWisataModel;
		TempatWisataModel::destroy($id_req);
		return redirect('/admin-home')->with('status','Tempat Wisata Berhasil Dihapus.');
	}

	public function update(){

	}
	public function edit($id){
		echo json_encode(TempatWisataModel::select('*')
                           ->where('id_tempat_wisata', '=', $id)
                           ->get());

	}
}
