<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rekapAset extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekap = DB::table('rekapitulasi')->get();
        $aset_pengalihan = DB::table('aset_pengalihan')->count();
        
        return view('rekapitulasi.daftarRekap',compact('rekap', 'aset_pengalihan'));
    }


    public function create()
    {
        $aset_pengalihan = DB::table('aset_pengalihan')->count();
        return view('rekapitulasi.tambahRekap', compact('aset_pengalihan'));
    }

    public function store(Request $request)
    {
        DB::table('rekapitulasi')->insert([
            'id' => $request->id,
            'jenis_aset' => $request->jenis,
            'kuantitas' => $request->jumlah,
        ]);

        return redirect('/rekapitulasiAset')->with('status','DATA BERHASIL DITAMBAHKAN!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $rekap = DB::table('rekapitulasi')->where('id',$id)->get();
        return view('rekapitulasi.editRekap', compact('rekap'));
    }


    public function update(Request $request)
    {
        DB::table('rekapitulasi')->where('id',$request->id)->update([
            'id' => $request->id,
            'jenis_aset' => $request->jenis,
            'kuantitas' => $request->jumlah,
        ]);

        return redirect('/rekapitulasiAset')->with('status','DATA BERHASIL DIUPDATE!');
    }

    public function destroy($id)
    {
        DB::table('rekapitulasi')->where('id',$id)->delete();
        
        return redirect('/rekapitulasiAset')->with('danger','DATA BERHASIL DIHAPUS');

    }
}
