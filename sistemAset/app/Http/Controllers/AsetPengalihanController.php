<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsetPengalihanController extends Controller
{
    public function index()
    {
        $aset_pengalihan = DB::table('aset_pengalihan')->get();
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetPengalihan.AsetPengalihan',['aset_pengalihan' => $aset_pengalihan, 'aset_tetaps' => $aset_tetaps]);
    }

    public function tambah()
    {
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetPengalihan.tambahAsetPengalihan',['aset_tetaps' => $aset_tetaps]);
    }

    public function store(Request $request)
    {

        $nama_aset = DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->first();

        DB::table('aset_pengalihan')->insert([
            'nama_Aset' => $nama_aset->nama_Aset,
            'jenis_Pengalihan' => $request->jenis_Pengalihan,
            'jumlah' => $request->jumlah,
            'lokasi_Pengalihan' => $request->lokasi_Pengalihan,
            'id_Aset' => $request->id_Aset
        ]);

        DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->delete();
        
        $aset_pengalihan = DB::table('aset_pengalihan')->count();

        DB::table('rekapitulasi')->where('id',6)->update([
            'kuantitas' => $aset_pengalihan
        ]);

        $count_aset_tetaps = DB::table('aset_tetaps')->count();

        DB::table('rekapitulasi')->where('id',1)->update([
            'kuantitas' => $count_aset_tetaps
        ]);

        return redirect('/AsetPengalihan');
    }
    
    public function edit($id_Aset)
    {
        $aset_pengalihan = DB::table('aset_pengalihan')->where('id_Aset',$id_Aset)->get();
        $aset_tetaps = DB::table('aset_tetaps')->where('id_Aset',$id_Aset)->get();

        return view('asetPengalihan.editAsetPengalihan',['aset_pengalihan' => $aset_pengalihan, 'aset_tetaps' => $aset_tetaps]);
    }

    public function update(Request $request)
    {
        DB::table('aset_pengalihan')->where('id_Aset',$request->id_Aset)->update([
            'nama_Aset' => $request->nama_Aset,
            'jenis_Pengalihan' => $request->jenis_Pengalihan,
            'jumlah' => $request->jumlah,
            'lokasi_Pengalihan' => $request->lokasi_Pengalihan
        ]);

        return redirect('/AsetPengalihan');
    }

    public function hapus($id_Aset)
    {
        DB::table('aset_pengalihan')->where('id_Aset',$id_Aset)->delete();

        $count_aset_pengalihan = DB::table('aset_pengalihan')->count();

        DB::table('rekapitulasi')->where('id',6)->update([
            'kuantitas' => $count_aset_pengalihan
        ]);

        return redirect('/AsetPengalihan');
    }
}
