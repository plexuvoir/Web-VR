<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	public function showLogin()
	{
		return view('login');
	}

	public function login(Request $request)
	{
    	//dd($request->all());
		$data = User::where('name',$request->username)->firstOrFail();
		if ($data) {
			if(Hash::check($request->password,$data->password)){
				return redirect('/admin');
			}
		}
		return redirect('/login')->with('message','Username atau password salah');
	}

}
