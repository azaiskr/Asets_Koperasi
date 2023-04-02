<?php

namespace App\Http\Controllers;
use App\Models\asetPerbaikan;
use App\Models\pj_perbaikan;
use Illuminate\Http\Request;

class AsetPerbaikanController extends Controller
{

    public function index()
    {
        $aset = asetPerbaikan::all();
        $pj = pj_perbaikan::all();
        
        return view('asetPerbaikan.daftarAset', compact('aset','pj'));
    }

    public function create()
    {
        return view('asetPerbaikan.tambahAset');
    }

    public function store(Request $request)
    {
        asetPerbaikan::create([
            'id_aset' => $request->id,
            'nama_aset'=> $request->nama,
            'status_perbaikan'=>$request->status,
            'tanggal_perbaikan'=>$request->tanggal,
            'pj_perbaikan'=>$request->servicer,
        ]);
        return redirect('/asetPerbaikan/daftarAset')->with('status', 'DATA BERHASIL DITAMBAHKAN!');
    }


    public function show(asetPerbaikan $asetPerbaikan)
    {
        //
    }

    public function edit($id)
    {
        $aset = asetPerbaikan::find($id);
        return view('asetPerbaikan.editAset', compact('aset'));
    }

    public function update($id,Request $request)
    {
        $aset = asetPerbaikan::find($id);
        $aset->id_aset = $request->id;
        $aset->nama_aset = $request->nama;
        $aset->status_perbaikan = $request->status;
        $aset->tanggal_perbaikan = $request->tanggal;
        $aset->pj_perbaikan = $request->servicer;
        $aset->save();
        return redirect('asetPerbaikan/daftarAset')->with('status', 'DATA BERHASIL DIUPDATE!');
    }

    public function destroy($id)
    {
        $aset = asetPerbaikan::find($id);
        $aset->delete();
        return redirect('asetPerbaikan/daftarAset')->with('danger', 'DATA BERHASIL DIHAPUS!');
    }
}
