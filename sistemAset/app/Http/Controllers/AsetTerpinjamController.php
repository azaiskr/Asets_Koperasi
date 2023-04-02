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
    public function tambah()
    {
        return view('asetTerpinjam.tambahTerpinjam');
    }

    public function store(Request $request)
    {
        DB::table('aset_terpinjam')->insert([
            'nama_aset' => $request->nama_aset,
            'nama_peminjam' => $request->nama_peminjam,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'tanggal_pinjaman' => $request->tanggal_pinjaman,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
        ]);

        return redirect('/AsetTerpinjam');
    }

    public function edit($id_aset)
    {
        $aset_terpinjam = DB::table('aset_terpinjam')->where('id_aset',$id_aset)->get();

        return view('asetTerpinjam.editTerpinjam',['aset_terpinjam' => $aset_terpinjam]);
    }

    public function update(Request $request)
    {
        DB::table('aset_tersedia')->where('id_aset',$request->id_aset)->update([
            'nama_aset' => $request->nama_aset,
            'stok' => $request->stok,
        ]);

        return redirect('/AsetTersedia');
    }

    public function hapus($id_aset)
    {
        DB::table('aset_tersedia')->where('id_aset',$id_aset)->delete();

        return redirect('/AsetTersedia');
    }   
}