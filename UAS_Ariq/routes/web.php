<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

// Route::get('/', function () {
//     return view('daftarBuku');
// });

//Route::get('/', 'BukuController@index');
Route::get('/', [BukuController::class, 'index']);
//Route::get('/tambah', [BukuController::class, 'tambah']);

Route::get('/tambah', 'App\Http\Controllers\BukuController@tambah');
Route::post('/store', 'App\Http\Controllers\BukuController@store');
Route::get('/edit/{IDBuku}', 'App\Http\Controllers\BukuController@edit');
Route::post('/update', 'App\Http\Controllers\BukuController@update');
Route::get('/hapus/{IDBuku}', 'App\Http\Controllers\BukuController@hapus');


//Aset Tetap
//Route::get('/Buku', 'App\Http\Controllers\BukuController@index')->middleware('auth');
//Route::get('/Buku/tambah', 'App\Http\Controllers\BukuController@tambah')->middleware('auth');
//Route::post('/Buku/store', 'App\Http\Controllers\BukuController@store')->middleware('auth');
//Route::get('/Buku/edit/{id_Aset}', 'App\Http\Controllers\BukuController@edit')->middleware('auth');
//Route::post('/Buku/update', 'App\Http\Controllers\BukuController@update')->middleware('auth');
//Route::get('/Buku/hapus/{id_Aset}', 'App\Http\Controllers\BukuController@hapus')->middleware('auth');
