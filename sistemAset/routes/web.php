<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AsetPerbaikanController;
use App\Http\Controllers\PjPerbaikanController;
use App\Http\Controllers\AsetTersediaController;
use App\Http\Controllers\AsetTerpinjamController;
use App\Http\Controllers\rekapAset;
use App\Http\Controllers\JualBeliController;
use App\Http\Controllers\Auth\PendaftaranController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PiutangController;

/*Route::get('/', function () {
    return view('asetDashboard');
});*/

// -------- Welcome Page -------- //
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/pendaftaran', [PendaftaranController::class, 'register'])->name('register');
Route::post('pendaftaran/action', [PendaftaranController::class, 'actionregister'])->name('actionregister');

Route::get('register/verify/{verify_key}', [PendaftaranController::class, 'verify'])->name('verify');

Route::get('/lupaPassword', function () { return view('login.lupaPassword');});



//is this still needed???
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


// -------- Route tiap aset -------- //

// Aset Tersedia
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

//Aset Terpinjam
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

//Aset Tetap
Route::get('/AsetTetap', 'App\Http\Controllers\AsetTetapController@index');
Route::get('/AsetTetap/tambah', 'App\Http\Controllers\AsetTetapController@tambah');
Route::post('/AsetTetap/store', 'App\Http\Controllers\AsetTetapController@store');
Route::get('/AsetTetap/edit/{id_Aset}', 'App\Http\Controllers\AsetTetapController@edit');
Route::post('/AsetTetap/update', 'App\Http\Controllers\AsetTetapController@update');
Route::get('/AsetTetap/hapus/{id_Aset}', 'App\Http\Controllers\AsetTetapController@hapus');

//Aset pengalihan
Route::get('/AsetPengalihan', 'App\Http\Controllers\AsetPengalihanController@index');
Route::get('/AsetPengalihan/tambah', 'App\Http\Controllers\AsetPengalihanController@tambah');
Route::post('/AsetPengalihan/store', 'App\Http\Controllers\AsetPengalihanController@store');
Route::get('/AsetPengalihan/edit/{id_Aset}', 'App\Http\Controllers\AsetPengalihanController@edit');
Route::post('/AsetPengalihan/update', 'App\Http\Controllers\AsetPengalihanController@update');
Route::get('/AsetPengalihan/hapus/{id_Aset}', 'App\Http\Controllers\AsetPengalihanController@hapus');

//Aset jual beli
Route::get('/aset_jual_beli', [App\Http\Controllers\JualBeliController::class, 'index']);
Route::get('tambahAsetJualBeli', [App\Http\Controllers\JualBeliController::class, 'create']);
Route::post('/aset_jual_beli/tambah', [App\Http\Controllers\JualBeliController::class,'tambah']);
Route::get('/aset_jual_beli/edit/{id}', [App\Http\Controllers\JualBeliController::class,'edit']);
Route::post('/aset_jual_beli/update', [App\Http\Controllers\JualBeliController::class,'update']);
Route::get('/aset_jual_beli/hapus/{id}', [App\Http\Controllers\JualBeliController::class,'destroy']);

//PJ or SERVICER
Route::get('/daftarServicer',[PjPerbaikanController::class,'index']);// Read
Route::get('/daftarServicer/create',[PjPerbaikanController::class,'create']); 
Route::post('/daftarServicer/store',[PjPerbaikanController::class,'store']);
Route::get('/daftarServicer/edit/{id}',[PjPerbaikanController::class,'edit']);
Route::put('/daftarServicerupdate/{id}',[PjPerbaikanController::class,'update']);
Route::get('/daftarServicer/hapus/{id}',[PjPerbaikanController::class,'destroy']);

//ASET Perbaikan

Route::get('/asetPerbaikan', [AsetPerbaikanController::class,'index']);
Route::get('/asetPerbaikan/create',[AsetPerbaikanController::class,'create']); 
Route::post('/asetPerbaikan/store',[AsetPerbaikanController::class,'store']);
Route::get('/asetPerbaikan/edit/{id}',[AsetPerbaikanController::class,'edit']);
Route::put('/asetPerbaikan/update/{id}',[AsetPerbaikanController::class,'update']);
Route::get('/asetPerbaikan/hapus/{id}',[AsetPerbaikanController::class,'destroy']);

//rekapitulasi aset
Route::get('/rekapitulasiAset',[rekapAset::class,'index']);// Read
Route::get('/rekapitulasiAset/create',[rekapAset::class,'create']);
Route::post('/rekapitulasiAset/store',[rekapAset::class,'store']);
Route::get('/rekapitulasiAset/edit/{id}',[rekapAset::class,'edit']);
Route::post('/rekapitulasiAset/update/',[rekapAset::class,'update']);
Route::get('/rekapitulasiAset/hapus/{id}',[rekapAset:: class,'destroy']);

//admin
Route::get('/user',[UserController::class,'index']);// Read

//Piutang
Route::get('/aset_piutang',[PiutangController::class,'index']);// Read
Route::get('/aset_piutang/create',[PiutangController::class,'create']);
Route::post('/aset_piutang/store',[PiutangController::class,'store']);
Route::get('/aset_piutang/edit/{id}',[PiutangController::class,'edit']);
Route::post('/aset_piutang/update/',[PiutangController::class,'update']);
Route::get('/aset_piutang/hapus/{id}',[PiutangController:: class,'destroy']);
