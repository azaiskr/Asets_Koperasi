<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = DB::table('peminjaman')->get();
        $buku = DB::table('buku')->get();

        return view('Peminjaman',['peminjaman' => $peminjaman, 'buku' => $buku]);
    }

    public function tambah()
    {
        $buku = DB::table('buku')->get();

        return view('TambahPeminjaman', ['buku' => $buku]);
    }

    public function store(Request $request)
    {
        DB::table('peminjaman')->insert([
            'NamaPeminjam' => $request->NamaPeminjam,
            'TanggalPengembalian' => $request->TanggalPengembalian,
            'IDBuku' => $request->IDBuku,
        ]);

        $buku = DB::table('buku')->where('IDBuku', $request->IDBuku)->first();
        DB::table('buku')->where('IDBuku', $request->IDBuku)->update([
            'JumlahStok' => $buku->JumlahStok-1
        ]);



        return redirect('/peminjaman');
    }

    public function edit($IDPeminjaman)
    {
        $peminjaman = DB::table('peminjaman')->where('IDPeminjaman',$IDPeminjaman)->get();
        $buku = DB::table('buku')->get();

        return view('EditPeminjaman',['peminjaman' => $peminjaman, 'buku' => $buku]);
    }

    public function update(Request $request)
    {
        DB::table('peminjaman')->where('IDPeminjaman',$request->IDPeminjaman)->update([
            'NamaPeminjam' => $request->NamaPeminjam,
            'TanggalPengembalian' => $request->TanggalPengembalian,
            'IDBuku' => $request->IDBuku,
        ]);

        return redirect('/peminjaman');
    }

    public function hapus($IDPeminjaman)
    {
        DB::table('peminjaman')->where('IDPeminjaman',$IDPeminjaman)->delete();

        return redirect('/peminjaman');
    }
}
