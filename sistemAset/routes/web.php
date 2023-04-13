<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\AsetPerbaikanController;
use App\Http\Controllers\PjPerbaikanController;
use App\Http\Controllers\AsetTersediaController;
use App\Http\Controllers\AsetTerpinjamController;
use App\Http\Controllers\rekapAset;
use App\Http\Controllers\JualBeliController;
use App\Http\Controllers\PiutangController;


/*Route::get('/', function () {
    return view('asetDashboard');
});*/

//Welcome Page
Route::get('/', function () { return view('login.masuk');});
Route::get('/lupaPassword', function () { return view('login.lupaPassword');});
Route::get('/daftar', function () { return view('login.daftar');});

Route::get('/dashboard', function () {
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

Route::get('aset_perbaikan/daftarAset','AsetPerbaikanController@index');

Route::get('/aset_tersedia', [AsetTersediaController::class, 'index']);
//Route::get('/AsetTersedia', 'App\Http\Controllers\AsetTersediaController@index');
Route::get('/AsetTersedia/tambah', 'App\Http\Controllers\AsetTersediaController@tambah');
Route::post('/AsetTersedia/store', 'App\Http\Controllers\AsetTersediaController@store');
Route::get('/AsetTersedia/edit/{id_aset}', 'App\Http\Controllers\AsetTersediaController@edit');
Route::post('/AsetTersedia/update', 'App\Http\Controllers\AsetTersediaController@update');
Route::get('/AsetTersedia/hapus/{id_aset}', 'App\Http\Controllers\AsetTersediaController@hapus');
Route::get('/tambahTersedia', function(){
    return view('asetTersedia.tambahTersedia');
});

Route::get('/aset_terpinjam', [AsetTerpinjamController::class, 'index']);
//Route::get('/AsetTerpinjam', 'App\Http\Controllers\AsetTersediaController@index');
Route::get('/AsetTerpinjam/tambah', 'App\Http\Controllers\AsetTerpinjamController@tambah');
Route::post('/AsetTerpinjam/store', 'App\Http\Controllers\AsetTerpinjamController@store');
Route::get('/AsetTerpinjam/edit/{id_aset}', 'App\Http\Controllers\AsetTerpinjamController@edit');
Route::post('/AsetTerpinjam/update', 'App\Http\Controllers\AsetTerpinjamController@update');
Route::get('/AsetTerpinjam/hapus/{id_aset}', 'App\Http\Controllers\AsetTerpinjamController@hapus');
Route::get('/tambahTerpinjam', function(){
    return view('asetTerpinjam.tambahTerpinjam');
});

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


Route::get('/aset_jual_beli', [App\Http\Controllers\JualBeliController::class, 'index']);
Route::get('tambahAsetJualBeli', [App\Http\Controllers\JualBeliController::class, 'create']);
Route::post('/aset_jual_beli/tambah', [App\Http\Controllers\JualBeliController::class,'tambah']);
Route::get('/aset_jual_beli/edit/{id}', [App\Http\Controllers\JualBeliController::class,'edit']);
Route::post('/aset_jual_beli/update', [App\Http\Controllers\JualBeliController::class,'update']);
Route::get('/aset_jual_beli/hapus/{id}', [App\Http\Controllers\JualBeliController::class,'destroy']);



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


//rekapitulasi aset
Route::get('/rekapitulasiAset',[rekapAset::class,'index']);// Read

Route::get('/rekapitulasiAset/create',[rekapAset::class,'create']);
Route::post('/rekapitulasiAset/store',[rekapAset::class,'store']);

Route::get('/rekapitulasiAset/edit/{id}',[rekapAset::class,'edit']);
Route::post('/rekapitulasiAset/update/',[rekapAset::class,'update']);

Route::get('/rekapitulasiAset/hapus/{id}',[rekapAset:: class,'destroy']);

//admin
Route::get('/user',[UserController::class,'index']);// Read

Route::get('/user/create',[UserController::class,'create']);
Route::post('/user/store',[UserController::class,'store']);

Route::get('/rekapitulasiAset/edit/{id}',[UserController::class,'edit']);
Route::post('/rekapitulasiAset/update/',[UserController::class,'update']);

Route::get('/rekapitulasiAset/hapus/{id}',[UserController:: class,'destroy']);

//Piutang
Route::get('/aset_piutang',[PiutangController::class,'index']);// Read

Route::get('/aset_piutang/create',[PiutangController::class,'create']);
Route::post('/aset_piutang/store',[PiutangController::class,'store']);

Route::get('/aset_piutang/edit/{id}',[PiutangController::class,'edit']);
Route::post('/aset_piutang/update/',[PiutangController::class,'update']);

Route::get('/aset_piutang/hapus/{id}',[PiutangController:: class,'destroy']);