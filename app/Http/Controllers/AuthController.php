<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
    	return view('login');
    }

    public function login(Request $request)
    {
    	dd($request->all());
    }
    
}
