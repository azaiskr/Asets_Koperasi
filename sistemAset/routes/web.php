<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsetPerbaikanController;
use App\Http\Controllers\PjPerbaikanController;
use App\Http\Controllers\AsetTersediaController;
use App\Http\Controllers\AsetTerpinjamController;

/*Route::get('/', function () {
    return view('asetDashboard');
});*/


Route::get('/', function () {
    return view('asetDashboard');
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

Route::get('/asetPerbaikan', function(){
    return view('asetPerbaikan.home');
});

//PJ or SERVICER
Route::get('/asetPerbaikan/daftarPJ',[PjPerbaikanController::class,'index']);// Read
//Create PJ
Route::get('/asetPerbaikan/daftarPJ/create',[PjPerbaikanController::class,'create']); 
Route::post('/daftarPJ/store',[PjPerbaikanController::class,'store']);
//Update PJ
Route::get('/asetPerbaikan/daftarPJ/edit/{id}',[PjPerbaikanController::class,'edit']);
Route::put('/daftarPJ/update/{id}',[PjPerbaikanController::class,'update']);
//Hapus Pj
Route::get('/asetPerbaikan/daftarPJ/hapus/{id}',[PjPerbaikanController::class,'destroy']);

//ASET Perbaikan
Route::get('/asetPerbaikan/daftarAset', [AsetPerbaikanController::class,'index']);
//Create Aset
Route::get('/asetPerbaikan/daftarAset/create',[AsetPerbaikanController::class,'create']); 
Route::post('/daftarAset/store',[AsetPerbaikanController::class,'store']);
//Update Aset
Route::get('/asetPerbaikan/daftarAset/edit/{id}',[AsetPerbaikanController::class,'edit']);
Route::put('/daftarAset/update/{id}',[AsetPerbaikanController::class,'update']);
//Hapus Aset
Route::get('/asetPerbaikan/daftarAset/hapus/{id}',[AsetPerbaikanController::class,'destroy']);

