<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asetPerbaikanController;
use App\Http\Controllers\pjPerbaikanController;
use App\Http\Controllers\AsetTersediaController;
use App\Http\Controllers\AsetTerpinjamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aset_perbaikan', function(){
    return view('asetPerbaikan.home');
});

Route::get('/AsetTetap', function(){
    return view('asetTetap.AsetTetap');
});

Route::get('/tambahAset', function(){
    return view('asetTetap.tambahAset');
});

Route::get('/AsetPengalihan', function(){
    return view('asetPengalihan.AsetPengalihan');
});

Route::get('/tambahAsetPengalihan', function(){
    return view('asetPengalihan.tambahAsetPengalihan');
});

Route::get('aset_perbaikan/daftarAset','AsetPerbaikanController@index');

Route::get('/aset_tersedia', [AsetTersediaController::class, 'index']);
Route::get('/aset_terpinjam', [AsetTerpinjamController::class, 'index']);

Route::get('/AsetTetap', 'App\Http\Controllers\AsetTetapController@index');
Route::get('/AsetTetap/tambah', 'App\Http\Controllers\AsetTetapController@tambah');
Route::post('/AsetTetap/store', 'App\Http\Controllers\AsetTetapController@store');
Route::get('/AsetTetap/edit/{id_Aset}', 'App\Http\Controllers\AsetTetapController@edit');
Route::post('/AsetTetap/update', 'App\Http\Controllers\AsetTetapController@update');
Route::get('/AsetTetap/hapus/{id_Aset}', 'App\Http\Controllers\AsetTetapController@hapus');

Route::get('/AsetPengalihan', 'App\Http\Controllers\AsetPengalihanController@index');
Route::get('/AsetPengalihan/tambah', 'App\Http\Controllers\AsetPengalihanController@tambah');
Route::post('/AsetPengalihan/store', 'App\Http\Controllers\AsetPengalihanController@store');
Route::get('/AsetPengalihan/edit/{id_Aset}', 'App\Http\Controllers\AsetPengalihanController@edit');
Route::post('/AsetPengalihan/update', 'App\Http\Controllers\AsetPengalihanController@update');
Route::get('/AsetPengalihan/hapus/{id_Aset}', 'App\Http\Controllers\AsetPengalihanController@hapus');




