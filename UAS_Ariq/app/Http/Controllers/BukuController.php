<?php

namespace App\Http\Controllers;

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
    public function tambah()
    {
        return view('TambahBuku');
    }

    public function store(Request $request)
    {
        DB::table('buku')->insert([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'DendaBuku' => $request->DendaBuku,
        ]);

        // $count_aset_tersedia = DB::table('aset_tersedia')->count();

        // DB::table('rekapitulasi')->where('id',3)->update([
        //     'kuantitas' => $count_aset_tersedia
        // ]);

        return redirect('/');
    }

    public function edit($IDBuku)
    {
        $buku = DB::table('buku')->where('IDBuku',$IDBuku)->get();

        return view('EditBuku',['buku' => $buku]);
    }

    public function update(Request $request)
    {
        DB::table('buku')->where('IDBuku',$request->IDBuku)->update([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'DendaBuku' => $request->DendaBuku,
        ]);

        return redirect('/');
    }

    public function hapus($IDBuku)
    {
        DB::table('buku')->where('IDBuku',$IDBuku)->delete();

        // $count_aset_tersedia = DB::table('aset_tersedia')->count();

        // DB::table('rekapitulasi')->where('id',3)->update([
        //     'kuantitas' => $count_aset_tersedia
        // ]);

        return redirect('/');
    }
}
