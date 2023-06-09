<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenulisController;

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


Route::get('/buku', [BukuController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'tambah']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}',[KategoriController::class,'edit']);
Route::post('/kategori/update',[KategoriController::class,'update']);
Route::get('/kategori/hapus/{id}',[KategoriController::class,'hapus']);

Route::get('/penulis', [PenulisController::class, 'index']);
Route::get('/penulis/tambah', [PenulisController::class, 'tambah']);
Route::post('/penulis/store', [PenulisController::class, 'store']);
Route::get('/penulis/edit/{id}',[PenulisController::class,'edit']);
Route::post('/penulis/update',[PenulisController::class,'update']);
Route::get('/penulis/hapus/{id}',[PenulisController::class,'hapus']);
