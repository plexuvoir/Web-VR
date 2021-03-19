<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
	if (session('berhasil_login')) {
		return redirect('/admin-home');
	} else {
		return redirect('/login');
	}
});
Route::get('/admin-home', 'TempatWisataController@TempatWisataArrays');
Route::get('/form', function () {
    return view('tempatWisataForm');
})->name('form');
Route::get('/login', 'AuthController@showLogin')->name('login');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/tempat-wisata', 'HomeController@tempatWisata')->name('tempat-wisata');
Route::post('/tambah-tempat-wisata', 'TempatWisataController@tambah')->name('tambah-tempat-wisata');
Route::get('/spots/', 'SpotController@SpotArrays')->name('spots');
Route::get('/tempat-wisata/{id}', 'SpotController@SpotSelects');
Route::get('/tempat-wisata/edit/{id}', 'TempatWisataController@getTempatWisata')->name('edit-tempat-wisata');
Route::post('/delete-tempat-wisata/{id}', 'TempatWisataController@destroy');
Route::post('/update-tempat-wisata/{id}', 'TempatWisataController@update');
Route::post('/tambah-spot', 'SpotController@tambah')->name('tambah-spot');
Route::post('/delete-spot/{id_spot}', 'SpotController@destroy');
Route::get('/spot/edit/{id}', 'SpotController@getSpot')->name('edit-spot');
Route::post('/update-spot/{id}', 'SpotController@update');
Route::post('/tambah-tombol','TombolController@tambahTombol')->name('tambah-tombol');
Route::get('/tombol/edit/{id}','TombolController@getTombol')->name('edit-tombol');
Route::post('/update-tombol/{id}', 'TombolController@update');
Route::post('/delete-tombol/{id_tombol}', 'TombolController@destroy');
