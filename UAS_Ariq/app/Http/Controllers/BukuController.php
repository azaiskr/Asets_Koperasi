<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 
    	$buku = DB::table('buku')->get();
 
    	// mengirim data ke view index
        return view('DaftarBuku',['buku' => $buku]); 
    }   
}
