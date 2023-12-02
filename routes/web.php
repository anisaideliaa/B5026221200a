<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo Apa Kabar</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/ETS', function () {
	return view('5026221200');
});

Route::get('/success', function () {
	return view('success-form');
});

Route::get('/replika', function () {
	return view('replika');
});

Route::get('tugasLayout', function () {
	return view('tugasLayout');
});

Route::get('latihanPertama', function () {
	return view('latihanPertama');
});

Route::get('latihanKedua', function () {
	return view('latihanKedua');
});

Route::get('latihanKetiga', function () {
	return view('latihanKetiga');
});

Route::get('latihanKeempat', function () {
	return view('latihanKeempat');
});

Route::get('latihanKelima', function () {
	return view('latihanKelima');
});

Route::get('latihanKeenam', function () {
	return view('latihanKeenam');
});

Route::get('latihanKetujuh', function () {
	return view('latihanKetujuh');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/views/{id}','App\Http\Controllers\PegawaiController@views');

