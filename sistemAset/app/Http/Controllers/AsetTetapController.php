<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsetTetapController extends Controller
{
    public function index()
    {
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetTetap.AsetTetap',['aset_tetaps' => $aset_tetaps]);
    }

    public function tambah()
    {
        return view('asetTetap.tambahAset');
    }

    public function store(Request $request)
    {
        DB::table('aset_tetaps')->insert([
            'nama_Aset' => $request->nama_Aset,
            'lokasi' => $request->lokasi,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah,
            'ukuran' => $request->ukuran,
            'nilai_ekonomi' => $request->nilai_ekonomi
        ]);

        return redirect('/AsetTetap');
    }

    public function edit($id_Aset)
    {
        $aset_tetaps = DB::table('aset_tetaps')->where('id_Aset',$id_Aset)->get();

        return view('asetTetap.editAset',['aset_tetaps' => $aset_tetaps]);
    }

    public function update(Request $request)
    {
        DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->update([
            'nama_Aset' => $request->nama_Aset,
            'lokasi' => $request->lokasi,
            'kondisi' => $request->kondisi,
            'jumlah' => $request->jumlah,
            'ukuran' => $request->ukuran,
            'nilai_ekonomi' => $request->nilai_ekonomi
        ]);

        return redirect('/AsetTetap');
    }

    public function hapus($id_Aset)
    {
        DB::table('aset_tetaps')->where('id_Aset',$id_Aset)->delete();

        return redirect('/AsetTetap');
    }
    
}
