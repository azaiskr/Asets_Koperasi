<?php

namespace App\Http\Controllers;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storepj_perbaikanRequest $request)
    {
        $person = new pj_perbaikan;
        $person->id_pj = $request->id_pj;
        $person->nama_pj = $request->nama_pj;
        $person->no_Hp = $request->no_Hp;
        
        $person->save();
        return redirect('aset_perbaikan/daftarServicer');
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
    public function edit(pj_perbaikan $pj_perbaikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatepj_perbaikanRequest $request, pj_perbaikan $pj_perbaikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pj_perbaikan $pj_perbaikan)
    {
        //
    }
}
