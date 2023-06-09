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
//     return view('welcome');
// });


Route::get('/',[BukuController::class,'index']);
Route::get('/buku/tambah',[BukuController::class,'create']);
Route::post('/buku/store',[BukuController::class,'store']);
Route::get('/buku/edit/{id}',[BukuController::class,'edit']);
Route::post('/buku/update',[BukuController::class,'update']);
Route::get('/buku/hapus/{id}',[BukuController::class,'destroy']);
// Route::get('/rekapitulasiAset/hapus/{id}',[BukuController:: class,'destroy']);

