<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use DB;
use App\Models\pj_perbaikan;
use App\Http\Requests\Storepj_perbaikanRequest;
use App\Http\Requests\Updatepj_perbaikanRequest;

class PjPerbaikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = DB::table('pj_perbaikans')->get();
        return view('asetPerbaikan.daftarPJ', ['pj_perbaikans'=> $person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asetPerbaikan.tambahPJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(pj_perbaikan $request)
    {
        /*DB::table('pj_perbaikans')->insert([
            'nama_pj'=> $request->nama_pj,
            'no_Hp'=> $request->no_Hp,
        ]);*/
        $person = new pj_perbaikan;
        $person->nama_pj = $request->nama_pj;
        $person->no_Hp = $request->no_Hp;
        $person->save();

        return redirect()->to('asetPerbaikan/daftarPJ')->with('Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pj_perbaikan $pj_perbaikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pj_perbaikan $request)
    {
        $person = DB::table('pj_perbaikans')->where('id_pj',$request)->get();
        return view('asetPerbaikan.editPJ',['pj_perbaikans'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(pj_perbaikan $request)
    {
        DB::table('pj_perbaikans')->where('id_pj',$request)->update([
            'nama_pj'=>$request->nama,
            'no_Hp'=>$request->Hp,
        ]);
        return redirect('asetPerbaikan/daftarPJ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pj_perbaikan $pj_perbaikan)
    {
        //
    }
}
