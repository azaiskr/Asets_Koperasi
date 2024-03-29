<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pj_perbaikan;

class PjPerbaikanController extends Controller
{

    public function index()
    {
        $person = pj_perbaikan::all();
        return view('asetPerbaikan.daftarPJ', compact('person'));
    }
    
    public function create()
    {
        return view('asetPerbaikan.tambahPJ');
    }

    public function store(Request $request)
    {
        pj_perbaikan::create([
            'nama_pj' => $request->nama_pj,
            'no_Hp' => $request->no_Hp,
        ]);
        return redirect('/daftarServicer')->with('status','DATA BERHASIL DITAMBAHKAN!');
    }
    

    public function show(pj_perbaikan $pj_perbaikan)
    {
        //
    }


    public function edit($id)
    {
        $person = pj_perbaikan::find($id);
        return view('asetPerbaikan.editPJ', compact('person'));
    }

    public function update($id, Request $request)
    {
        $person = pj_perbaikan::find($id);
        $person->nama_pj = $request->nama;
        $person->no_Hp = $request->Hp;
        $person->save();
        return redirect('/daftarServicer')->with('status','DATA BERHASIL DIUPDATE!');
    }

    public function destroy($id)
    {
        $person = pj_perbaikan::find($id);
        $person->delete();
        return redirect('/daftarServicer')->with('danger', 'DATA BERHASIL DIHAPUS!');
    }
}
