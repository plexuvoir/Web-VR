<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index');
Route::get('/show-login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@login');