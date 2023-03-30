<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsetTerpinjamController extends Controller
{
    public function index(){
        $aset_terpinjam = DB::table('aset_terpinjam')->get();
    
        return view('asetTerpinjam\AsetTerpinjam',['aset_terpinjam' => $aset_terpinjam]);
    }
}
