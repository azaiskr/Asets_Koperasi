<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsetTersediaController extends Controller
{
    public function index()
    {
        $aset_tersedia = DB::table('aset_tersedia')->get();

        return view('aset_tersedia.AsetTersedia',['aset_tersedia' => $aset_tersedia]);
    }
}
