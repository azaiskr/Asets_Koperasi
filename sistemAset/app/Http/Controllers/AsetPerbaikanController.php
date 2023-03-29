<?php

namespace App\Http\Controllers;

use App\Models\asetPerbaikan;
use App\Http\Requests\StoreasetPerbaikanRequest;
use App\Http\Requests\UpdateasetPerbaikanRequest;

class AsetPerbaikanController extends Controller
{

    public function index()
    {
        $aset = asetPerbaikan::all();
        return view('asetPerbaikan.daftarAset', compact('aset'));
    }

    public function create()
    {
        return view('asetPerbaikan.tambahAset');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreasetPerbaikanRequest $request)
    {
        return view('aset.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(asetPerbaikan $asetPerbaikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asetPerbaikan $asetPerbaikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateasetPerbaikanRequest $request, asetPerbaikan $asetPerbaikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(asetPerbaikan $asetPerbaikan)
    {
        //
    }
}
