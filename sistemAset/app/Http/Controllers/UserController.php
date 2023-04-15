<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $user = DB::table('users')->get();
        return view('user.daftar',compact('user'));
    }

    public function create()
    {
        //return view('user.tambahData');
    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        DB::table('users')->where('id',$id)->delete();
        
        return redirect('/user')->with('danger','DATA BERHASIL DIHAPUS');

    }
}
