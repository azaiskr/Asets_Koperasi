<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return view('home');
        }else{
            return redirect('/login');
        }

    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $tabel = $request->tabel;

        if ($tabel == "aset_tetap") {
            $aset_tetaps = DB::table('aset_tetaps')->where('nama_Aset','like',"%".$cari."%")->paginate();
            return view('asetTetap.AsetTetap',['aset_tetaps' => $aset_tetaps]);
        } else if ($tabel == "aset_jual_beli") {
            $aset_jualbeli = DB::table('aset_jualbeli')->where('nama_aset','like',"%".$cari."%")->paginate();
            return view('asetJualBeli.daftaraset',['aset_jualbeli' => $aset_jualbeli]);
        } else if ($tabel == "piutang") {
            $data = DB::table('piutang')->where('nama_peminjam','like',"%".$cari."%")->paginate();
            return view('piutang.daftarPiutang',compact('data'));
        } else if ($tabel == "aset_tersedia") {
            $aset_tersedia = DB::table('aset_tersedia')->where('nama_aset','like',"%".$cari."%")->paginate();
            return view('asetTersedia.AsetTersedia',['aset_tersedia' => $aset_tersedia]);
        } elseif ($tabel == "aset_terpinjam") {
            $nama_aset = DB::table('aset_tersedia')->where('nama_aset','like',"%".$cari."%")->first();

            if ($nama_aset !== NULL) {
                $data = $nama_aset->id_aset;
            } else {
                $data = " ";
            }

            $aset_terpinjam = DB::table('aset_terpinjam')
            ->where('nama_peminjam','like',"%".$cari."%")
            ->orWhere('id_aset','like',"%".$data."%")
            ->paginate();
            $aset_tersedia = DB::table('aset_tersedia')->get();
            return view('asetTerpinjam.AsetTerpinjam',['aset_terpinjam' => $aset_terpinjam, 'aset_tersedia' => $aset_tersedia]);
        } else if ($tabel == "aset_perbaikan") {
            $nama_pj = DB::table('pj_perbaikans')->where('nama_pj', 'like', "%".$cari."%")->first();
            $nama_aset = DB::table('aset_tetaps')->where('nama_Aset','like',"%".$cari."%")->first();

            if ($nama_pj !== NULL) {
                $data = $nama_pj->id_pj;
            } elseif ($nama_aset !== NULL) {
                $data = $nama_aset->id_Aset;
            } else {
                $data = " ";
            }

            $aset_tetaps = DB::table('aset_tetaps')->get();
            $pj = DB::table('pj_perbaikans')->get();

            $aset = DB::table('aset_perbaikans')
            ->where('nama_aset','like',"%".$cari."%")
            ->orWhere('pj_perbaikan','like',"%".$data."%")
            ->orWhere('id_Aset','like',"%".$data."%")
            ->paginate();

            return view('asetPerbaikan.daftarAset', compact('aset', 'aset_tetaps', 'pj'));
        } elseif ($tabel == "servicer") {
            $person = DB::table('pj_perbaikans')->where('nama_pj','like',"%".$cari."%")->paginate();
            return view('asetPerbaikan.daftarPJ', ['person' => $person]);
        } elseif ($tabel == "aset_pengalihan") {
            $aset_pengalihan = DB::table('aset_pengalihan')
            ->where('nama_Aset','like',"%".$cari."%")
            ->orWhere('lokasi_Pengalihan','like',"%".$cari."%")
            ->paginate();
            return view('asetPengalihan.AsetPengalihan',['aset_pengalihan' => $aset_pengalihan]);
        }        
    }
}
