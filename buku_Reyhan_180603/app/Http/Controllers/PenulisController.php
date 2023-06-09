<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = DB::table('penulis')->get();

        return view('Penulis',['penulis' => $penulis]);
    }

    public function tambah()
    {
        return view('TambahPenulis');
    }

    public function store(Request $request)
    {
        DB::table('penulis')->insert([
            'IDPenulis' => $request->IDPenulis,
            'NamaPenulis' => $request->NamaPenulis,
        ]);

        return redirect('/penulis');
    }

    public function edit($IDPenulis)
    {
        $penulis = DB::table('penulis')->where('IDPenulis',$IDPenulis)->get();

        return view('EditPenulis',['penulis' => $penulis]);
    }

    public function update(Request $request)
    {
        DB::table('penulis')->where('IDPenulis',$request->IDPenulis)->update([
            'NamaPenulis' => $request->NamaPenulis,
        ]);

        return redirect('/penulis');
    }

    public function hapus($IDPenulis)
    {
        DB::table('penulis')->where('IDPenulis',$IDPenulis)->delete();

        return redirect('/penulis');
    }
}
