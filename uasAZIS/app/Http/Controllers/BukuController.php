<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index(){
        $dataBuku = DB::table('buku')->get();
        $dataKategori = DB::table('kategori')->get();
        $dataPenulis = DB::table('penulis')->get();
        return view('buku',compact('dataBuku','dataKategori','dataPenulis'));
    }

    public function create(){
        $dataKategori = DB::table('kategori')->get();
        $dataPenulis = DB::table('penulis')->get();
        return view('tambahBuku',compact('dataKategori','dataPenulis'));
    }

    public function store(Request $request) {
        DB::table('buku')->insert([
            'idBuku' => $request->idBuku,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'penulis' => $request->penulis,
            'penerbitBuku' => $request->penerbit,
            'tahunTerbit' => $request->tahunTerbit,
            'jumlahStok' => $request->jumlahStok,
            'dendaBuku' => $request->dendaBuku,
        ]);

        return redirect('/');
    }

    public function edit($id){
        $buku = DB::table('buku')->where('idBuku',$id)->get();
        $dataKategori = DB::table('kategori')->get();
        $dataPenulis = DB::table('penulis')->get();
        return view('editBuku',compact('buku','dataKategori','dataPenulis'));
    }


    public function update(Request $request){
        DB::table('buku')->where('idBuku',$request->idBuku)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'penulis' => $request->penulis,
            'penerbitBuku' => $request->penerbit,
            'tahunTerbit' => $request->tahunTerbit,
            'jumlahStok' => $request->jumlahStok,
            'dendaBuku' => $request->dendaBuku,
        ]);

        return redirect('/')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id) {
        DB::table('buku')->where('idBuku',$id)->delete();
        return redirect('/')->with('danger','DATA BERHASIL DIHAPUS');
    }
}
