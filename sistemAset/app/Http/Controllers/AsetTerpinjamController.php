<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsetTerpinjamController extends Controller
{
    public function index(){
        $aset_terpinjam = DB::table('aset_terpinjam')->get();
    
        return view('asetTerpinjam.AsetTerpinjam',['aset_terpinjam' => $aset_terpinjam]);
    }
    public function tambah()
    {
        return view('asetTerpinjam.tambahTerpinjam');
    }

    public function store(Request $request)
    {
        DB::table('aset_terpinjam')->insert([
            'id_aset' => $request->id_aset,
            'nama_aset' => $request->nama_aset,
            'nama_peminjam' => $request->nama_peminjam,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'tanggal_pinjaman' => $request->tanggal_pinjaman,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
        ]);

        $count_aset_terpinjam = DB::table('aset_terpinjam')->count();

        DB::table('rekapitulasi')->where('id',2)->update([
            'kuantitas' => $count_aset_terpinjam
        ]);

        return redirect('/aset_terpinjam');
    }

    public function edit($id_aset)
    {
        $aset_terpinjam = DB::table('aset_terpinjam')->where('id_aset',$id_aset)->get();

        return view('asetTerpinjam.editTerpinjam',['aset_terpinjam' => $aset_terpinjam]);
    }

    public function update(Request $request)
    {
        DB::table('aset_terpinjam')->where('id_aset',$request->id_aset)->update([
            'nama_aset' => $request->nama_aset,
            'nama_peminjam' => $request->nama_peminjam,
            'jumlah_pinjaman' => $request->jumlah_pinjaman,
            'tanggal_pinjaman' => $request->tanggal_pinjaman,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
        ]);

        return redirect('/aset_terpinjam');
    }

    public function hapus($id_aset)
    {
        DB::table('aset_terpinjam')->where('id_aset',$id_aset)->delete();

        $count_aset_terpinjam = DB::table('aset_terpinjam')->count();

        DB::table('rekapitulasi')->where('id',2)->update([
            'kuantitas' => $count_aset_terpinjam
        ]);

        return redirect('/aset_terpinjam');
    }   
}