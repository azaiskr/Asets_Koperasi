<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetPerbaikanController;
use App\Http\Controllers\PjPerbaikanController;

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
    return view('asetDashboard');
});

Route::get('asetPerbaikan', function(){
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

//ASET
Route::get('/asetPerbaikan/daftarAset', [AsetPerbaikanController::class,'index']);
//Create Aset
Route::get('/asetPerbaikan/daftarAset/create',[AsetPerbaikanController::class,'create']); 
Route::post('/daftarAset/store',[AsetPerbaikanController::class,'store']);
//Update Aset
Route::get('/asetPerbaikan/daftarAset/edit/{id}',[AsetPerbaikanController::class,'edit']);
Route::put('/daftarAset/update/{id}',[AsetPerbaikanController::class,'update']);
//Hapus Aset
Route::get('/asetPerbaikan/daftarAset/hapus/{id}',[AsetPerbaikanController::class,'destroy']);
