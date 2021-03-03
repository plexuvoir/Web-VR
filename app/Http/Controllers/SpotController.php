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
		return view('spot', compact('spotArrays'));
	}
}
