<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();

        return view('Kategori',['kategori' => $kategori]);
    }

    public function tambah()
    {
        return view('TambahKategori');
    }

    public function store(Request $request)
    {
        DB::table('kategori')->insert([
            'IDKategori' => $request->IDKategori,
            'NamaKategori' => $request->NamaKategori,
        ]);

        return redirect('/kategori');
    }

    public function edit($IDKategori)
    {
        $kategori = DB::table('kategori')->where('IDKategori',$IDKategori)->get();

        return view('EditKategori',['kategori' => $kategori]);
    }

    public function update(Request $request)
    {
        DB::table('kategori')->where('IDKategori',$request->IDKategori)->update([
            'NamaKategori' => $request->NamaKategori,
        ]);

        return redirect('/kategori');
    }

    public function hapus($IDKategori)
    {
        DB::table('kategori')->where('IDKategori',$IDKategori)->delete();

        return redirect('/kategori');
    }
}
