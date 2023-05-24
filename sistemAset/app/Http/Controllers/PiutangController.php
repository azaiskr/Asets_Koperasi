<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PiutangController extends Controller
{

    public function index()
    {
        $data = DB::table('piutang')->get();
        return view('piutang.daftarPiutang',compact('data'));
    }

    public function create()
    {
        return view('piutang.tambahPiutang');
    }


    public function store(Request $request)
    {
        DB::table('piutang')->insert([
            'id_pinjaman' => $request->id,
            'nama_peminjam' => $request->nama,
            'jumlah_pinjaman' => $request->jumlah,
            'waktu_pinjaman' => $request->tanggal,
            'pelunasan' => "Belum Lunas",
        ]);

        $count_piutang = DB::table('piutang')->count();
        
        DB::table('rekapitulasi')->where('id',7)->update([
            'kuantitas' => $count_piutang
        ]);

        return redirect('/aset_piutang')->with('status','DATA BERHASIL DITAMBAHKAN!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = DB::table('piutang')->where('id_pinjaman',$id)->get();
        return view('piutang.editPiutang', compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('piutang')->where('id_pinjaman',$request->id)->update([
            'id_pinjaman' => $request->id,
            'nama_peminjam' => $request->nama,
            'jumlah_pinjaman' => $request->jumlah,
            'waktu_pinjaman' => $request->tanggal,
            'pelunasan' => $request->status,
        ]);

        return redirect('/aset_piutang')->with('status','DATA BERHASIL DIUPDATE!');
    }

    public function destroy($id)
    {
        DB::table('piutang')->where('id_pinjaman',$id)->delete();

        $count_piutang = DB::table('piutang')->count();
        
        DB::table('rekapitulasi')->where('id',7)->update([
            'kuantitas' => $count_piutang
        ]);
        
        return redirect('/aset_piutang')->with('danger','DATA BERHASIL DIHAPUS');
    }
}
