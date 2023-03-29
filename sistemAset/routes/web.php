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



Route::get('/asetPerbaikan/daftarPJ',[PjPerbaikanController::class,'index']);// Read

//Create PJ
Route::get('/asetPerbaikan/daftarPJ/create',[PjPerbaikanController::class,'create']); 
Route::post('/daftarPJ/store',[PjPerbaikanController::class,'store']);

//Update PJ
Route::get('/asetPerbaikan/daftarPJ/edit/{id}',[PjPerbaikanController::class,'edit']);
Route::post('/daftarPJ/update',[PjPerbaikanController::class,'update']);

Route::resource('aset', AsetPerbaikanController::class);

//Route::resource('/daftarPJ', PjPerbaikanController::class);
//Route::get('aset_perbaikan/daftarAsetPerbaikan','AsetPerbaikanController@index');
