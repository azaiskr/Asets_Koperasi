<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JualBeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aset_jualbeli = DB::table('aset_jualbeli')->get();
        return view('asetJualBeli.daftaraset',['aset_jualbeli' => $aset_jualbeli]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asetJualBeli.tambahJualBeli');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tambah(Request $request)
    {
        DB::table('aset_jualbeli')->insert([
            'id_aset' => $request->id_aset,
            'nama_aset' => $request->nama_aset,
            'stok' => $request->stok_aset,
            'nilai_ekonomi' => $request->nilai_ekonomi,
            'lokasi_jual' => $request->lokasi_jual
        ]);

        $count_aset_jualbeli = DB::table('aset_jualbeli')->count();
        
        DB::table('rekapitulasi')->where('id',5)->update([
            'kuantitas' => $count_aset_jualbeli
        ]);
        
        return redirect('/aset_jual_beli');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aset_jualbeli = DB::table('aset_jualbeli')->where('id_aset',$id)->get();
        return view('asetJualBeli.editaset',['aset_jualbeli' => $aset_jualbeli]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('aset_jualbeli')->where('id_aset',$request->id_aset)->update([
            'id_aset' => $request->id_aset,
            'nama_aset' => $request->nama_aset,
            'stok' => $request->stok_aset,
            'nilai_ekonomi' => $request->nilai_ekonomi,
            'lokasi_jual' => $request->lokasi_jual
        ]);

        return redirect('/aset_jual_beli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('aset_jualbeli')->where('id_aset',$id)->delete();

        $count_aset_jualbeli = DB::table('aset_jualbeli')->count();
        
        DB::table('rekapitulasi')->where('id',5)->update([
            'kuantitas' => $count_aset_jualbeli
        ]);

        return redirect('/aset_jual_beli');
    }
}
