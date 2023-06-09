<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index(){
        $dataBuku = DB::table('buku')->get();
        return view('buku',compact('dataBuku'));
    }

    public function create(){
        return view('tambahBuku');
    }

    public function store(Request $request) {
        DB::table('buku')->insert([
            'idBuku' => $request->idBuku,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunTerbit' => $request->tahunTerbit,
            'jumlahStok' => $request->jumlahStok,
            'dendaBuku' => $request->dendaBuku,
        ]);

        return redirect('/');
    }

    public function edit($id){
        $buku = DB::table('buku')->where('idBuku',$id)->get();
        return view('editBuku', compact('buku'));
    }


    public function update(Request $request){
        DB::table('buku')->where('idBuku',$request->idBuku)->update([
            'idBuku' => $request->idBuku,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
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
