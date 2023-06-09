<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$buku = DB::table('buku')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['buku' => $buku]);
 
    }
}
