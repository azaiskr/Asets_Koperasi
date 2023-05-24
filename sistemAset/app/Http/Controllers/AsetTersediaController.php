<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsetTersediaController extends Controller
{
    public function index(){
        $aset_tersedia = DB::table('aset_tersedia')->get();

        return view('asetTersedia.AsetTersedia',['aset_tersedia' => $aset_tersedia]);
    }
    public function tambah()
    {
        return view('asetTersedia.tambahTersedia');
    }

    public function store(Request $request)
    {
        DB::table('aset_tersedia')->insert([
            'id_aset' => $request->id_aset,
            'nama_aset' => $request->nama_aset,
            'stok' => $request->stok,
        ]);

        $count_aset_tersedia = DB::table('aset_tersedia')->count();

        DB::table('rekapitulasi')->where('id',3)->update([
            'kuantitas' => $count_aset_tersedia
        ]);

        return redirect('/aset_tersedia');
    }

    public function edit($id_aset)
    {
        $aset_tersedia = DB::table('aset_tersedia')->where('id_aset',$id_aset)->get();

        return view('asetTersedia.editTersedia',['aset_tersedia' => $aset_tersedia]);
    }

    public function update(Request $request)
    {
        DB::table('aset_tersedia')->where('id_aset',$request->id_aset)->update([
            'nama_aset' => $request->nama_aset,
            'stok' => $request->stok,
        ]);

        return redirect('/aset_tersedia');
    }

    public function hapus($id_aset)
    {
        DB::table('aset_tersedia')->where('id_aset',$id_aset)->delete();

        $count_aset_tersedia = DB::table('aset_tersedia')->count();

        DB::table('rekapitulasi')->where('id',3)->update([
            'kuantitas' => $count_aset_tersedia
        ]);

        return redirect('/aset_tersedia');
    }
}
