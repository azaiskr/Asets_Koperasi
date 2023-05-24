<?php


use Illuminate\Support\Facades\Route;
use App\Http;

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
use App\Http\Controllers\Auth\VerifikasiEmailController;
use App\Http\Controllers\Auth\ResetPasswordController;


// ----------------------------------------- Welcome Page ------------------------------------------------------ //
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/pendaftaran', [PendaftaranController::class, 'register'])->name('register');
Route::post('pendaftaran/action', [PendaftaranController::class, 'actionregister'])->name('actionregister');

Route::get('register/verify/{verify_key}', [PendaftaranController::class, 'verify'])->name('verify');

Route::get('/lupaPassword', function () { return view('login.lupaPassword');});

//Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/', [DashboardController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']);
//Route::get('/', [DashboardController::class, 'dashboard'])->middleware('auth');

//Route::get('register/verify/{verify_key}', [PendaftaranController::class, 'verify'])->name('verify');
Route::get('account/verify/{token}', [VerifikasiEmailController::class, 'verifikasi'])->name('user.verify');

Route::get('/ResetPassword/reset', [ResetPasswordController::class, 'reset'])->name('reset');
//oute::get('/ResetPassword/edit', [ResetPasswordController::class, 'edit'])->name('edit');
Route::get('account/edit/{email}', [ResetPasswordController::class, 'edit'])->name('user.edit')->middleware('can_reset_password');
Route::get('account/verifikasi/{email}', [ResetPasswordController::class, 'verifikasi'])->name('user.verifikasi');//->middleware('can_reset_password');
Route::post('/ResetPassword/update', [ResetPasswordController::class, 'update'])->name('update');


// -------------------------------------------- Route tiap aset ---------------------------------------------- //

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
Route::get('/AsetTerpinjam/hapus/{id_aset_terpinjam}', 'App\Http\Controllers\AsetTerpinjamController@hapus');

//Aset Tetap
Route::get('/AsetTetap', 'App\Http\Controllers\AsetTetapController@index')->middleware('auth');
Route::get('/AsetTetap/tambah', 'App\Http\Controllers\AsetTetapController@tambah')->middleware('auth');
Route::post('/AsetTetap/store', 'App\Http\Controllers\AsetTetapController@store')->middleware('auth');
Route::get('/AsetTetap/edit/{id_Aset}', 'App\Http\Controllers\AsetTetapController@edit')->middleware('auth');
Route::post('/AsetTetap/update', 'App\Http\Controllers\AsetTetapController@update')->middleware('auth');
Route::get('/AsetTetap/hapus/{id_Aset}', 'App\Http\Controllers\AsetTetapController@hapus')->middleware('auth');

//Aset pengalihan
Route::get('/AsetPengalihan', 'App\Http\Controllers\AsetPengalihanController@index')->middleware('auth');
Route::get('/AsetPengalihan/tambah', 'App\Http\Controllers\AsetPengalihanController@tambah')->middleware('auth');
Route::post('/AsetPengalihan/store', 'App\Http\Controllers\AsetPengalihanController@store')->middleware('auth');
Route::get('/AsetPengalihan/edit/{id_Aset}', 'App\Http\Controllers\AsetPengalihanController@edit')->middleware('auth');
Route::post('/AsetPengalihan/update', 'App\Http\Controllers\AsetPengalihanController@update')->middleware('auth');
Route::get('/AsetPengalihan/hapus/{id_Aset}', 'App\Http\Controllers\AsetPengalihanController@hapus')->middleware('auth');

//Aset jual beli
Route::get('/aset_jual_beli', [App\Http\Controllers\JualBeliController::class, 'index'])->middleware('auth');
Route::get('tambahAsetJualBeli', [App\Http\Controllers\JualBeliController::class, 'create'])->middleware('auth');
Route::post('/aset_jual_beli/tambah', [App\Http\Controllers\JualBeliController::class,'tambah'])->middleware('auth');
Route::get('/aset_jual_beli/edit/{id}', [App\Http\Controllers\JualBeliController::class,'edit'])->middleware('auth');
Route::post('/aset_jual_beli/update', [App\Http\Controllers\JualBeliController::class,'update'])->middleware('auth');
Route::get('/aset_jual_beli/hapus/{id}', [App\Http\Controllers\JualBeliController::class,'destroy'])->middleware('auth');

//PJ or SERVICER
Route::get('/daftarServicer',[PjPerbaikanController::class,'index'])->middleware('auth');// Read
Route::get('/daftarServicer/create',[PjPerbaikanController::class,'create'])->middleware('auth'); 
Route::post('/daftarServicer/store',[PjPerbaikanController::class,'store'])->middleware('auth');
Route::get('/daftarServicer/edit/{id}',[PjPerbaikanController::class,'edit'])->middleware('auth');
Route::put('/daftarServicerupdate/{id}',[PjPerbaikanController::class,'update'])->middleware('auth');
Route::get('/daftarServicer/hapus/{id}',[PjPerbaikanController::class,'destroy'])->middleware('auth');

//ASET Perbaikan
Route::get('/asetPerbaikan', [AsetPerbaikanController::class,'index'])->middleware('auth');
Route::get('/asetPerbaikan/create',[AsetPerbaikanController::class,'create'])->middleware('auth'); 
Route::post('/asetPerbaikan/store',[AsetPerbaikanController::class,'store'])->middleware('auth');
Route::get('/asetPerbaikan/edit/{id}',[AsetPerbaikanController::class,'edit'])->middleware('auth');
Route::put('/asetPerbaikan/update/{id}',[AsetPerbaikanController::class,'update'])->middleware('auth');
Route::get('/asetPerbaikan/destroy/{id}',[AsetPerbaikanController::class,'destroy'])->middleware('auth');



//rekapitulasi aset
Route::get('/rekapitulasiAset',[rekapAset::class,'index'])->middleware('auth');
Route::get('/rekapitulasiAset/create',[rekapAset::class,'create'])->middleware('auth');
Route::post('/rekapitulasiAset/store',[rekapAset::class,'store'])->middleware('auth');
Route::get('/rekapitulasiAset/edit/{id}',[rekapAset::class,'edit'])->middleware('auth');
Route::post('/rekapitulasiAset/update/',[rekapAset::class,'update'])->middleware('auth');
Route::get('/rekapitulasiAset/hapus/{id}',[rekapAset:: class,'destroy'])->middleware('auth');

//admin
Route::get('/user',[UserController::class,'index'])->middleware('auth');

//Piutang
Route::get('/aset_piutang',[PiutangController::class,'index'])->middleware('auth');
Route::get('/aset_piutang/create',[PiutangController::class,'create'])->middleware('auth');
Route::post('/aset_piutang/store',[PiutangController::class,'store'])->middleware('auth');
Route::get('/aset_piutang/edit/{id}',[PiutangController::class,'edit'])->middleware('auth');
Route::post('/aset_piutang/update/',[PiutangController::class,'update'])->middleware('auth');
Route::get('/aset_piutang/hapus/{id}',[PiutangController:: class,'destroy'])->middleware('auth');

