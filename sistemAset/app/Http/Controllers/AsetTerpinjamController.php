<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AsetTerpinjamController extends Controller
{
    public function index(){
        $aset_terpinjam = DB::table('aset_terpinjam')->get();
        $aset_tersedia = DB::table('aset_tersedia')->get();
    
        return view('asetTerpinjam.AsetTerpinjam',['aset_terpinjam' => $aset_terpinjam, 'aset_tersedia' => $aset_tersedia]);
    }
    public function tambah()
    {
        $aset_tersedia = DB::table('aset_tersedia')->get();

        return view('asetTerpinjam.tambahTerpinjam',['aset_tersedia' => $aset_tersedia]);
    }

    public function store(Request $request)
    {
        $aset_tersedia = DB::table('aset_tersedia')->where('id_aset',$request->id_aset)->first();

        if ($aset_tersedia->stok >= $request->jumlah_pinjaman) {
            DB::table('aset_terpinjam')->insert([
                'id_aset' => $request->id_aset,
                'nama_peminjam' => $request->nama_peminjam,
                'jumlah_pinjaman' => $request->jumlah_pinjaman,
                'tanggal_pinjaman' => $request->tanggal_pinjaman,
                'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
            ]);

            $stok_aset_tersedia = $aset_tersedia->stok - $request->jumlah_pinjaman;
        
            DB::table('aset_tersedia')->where('id_aset',$request->id_aset)->update([
                'stok' => $stok_aset_tersedia
            ]);

            $count_aset_terpinjam = DB::table('aset_terpinjam')->count();

            DB::table('rekapitulasi')->where('id',2)->update([
                'kuantitas' => $count_aset_terpinjam
            ]);

            return redirect('/aset_terpinjam');
        } else {
            Session::flash('error','Stok tidak tersedia');
		    return redirect('/AsetTerpinjam/tambah');
        }
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

    public function hapus($id_aset_terpinjam)
    {
        $aset_terpinjam = DB::table('aset_terpinjam')->where('id_aset_terpinjam',$id_aset_terpinjam)->first();
        $aset_tersedia = DB::table('aset_tersedia')->where('id_aset',$aset_terpinjam->id_aset)->first();
        $stok_aset_tersedia = $aset_tersedia->stok + $aset_terpinjam->jumlah_pinjaman;
        
        DB::table('aset_tersedia')->where('id_aset',$aset_terpinjam->id_aset)->update([
            'stok' => $stok_aset_tersedia
        ]);

        DB::table('aset_terpinjam')->where('id_aset_terpinjam',$id_aset_terpinjam)->delete();

        $count_aset_terpinjam = DB::table('aset_terpinjam')->count();

        DB::table('rekapitulasi')->where('id',2)->update([
            'kuantitas' => $count_aset_terpinjam
        ]);

        return redirect('/aset_terpinjam');
    }   
}