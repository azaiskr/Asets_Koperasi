<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->get();

        return view('Buku',['buku' => $buku]);
    }

    public function tambah()
    {
        return view('TambahBuku');
    }

    public function store(Request $request)
    {
        DB::table('buku')->insert([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'DendaBuku' => $request->DendaBuku,
            'IDKategori' => $request->IDKategori,
            'IDPenulis' => $request->IDPenulis,
        ]);

        return redirect('/buku');
    }

    public function edit($IDBuku)
    {
        $buku = DB::table('buku')->where('IDBuku',$IDBuku)->get();

        return view('EditBuku',['buku' => $buku]);
    }

    public function update(Request $request)
    {
        DB::table('buku')->where('IDBuku',$request->IDBuku)->update([
            'Judul' => $request->Judul,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'DendaBuku' => $request->DendaBuku,
            'IDKategori' => $request->IDKategori,
            'IDPenulis' => $request->IDPenulis,
        ]);

        return redirect('/buku');
    }

    public function hapus($IDBuku)
    {
        DB::table('buku')->where('IDBuku',$IDBuku)->delete();

        return redirect('/buku');
    }
}
