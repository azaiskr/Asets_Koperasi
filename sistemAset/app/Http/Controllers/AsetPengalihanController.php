<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class AsetPengalihanController extends Controller
{
    public function index()
    {
        $aset_pengalihan = DB::table('aset_pengalihan')->get();
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetPengalihan.AsetPengalihan',['aset_pengalihan' => $aset_pengalihan, 'aset_tetaps' => $aset_tetaps]);
    }

    public function tambah()
    {
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetPengalihan.tambahAsetPengalihan',['aset_tetaps' => $aset_tetaps]);
    }

    public function store(Request $request)
    {

        $aset_tetap = DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->first();

        if ($aset_tetap->jumlah > $request->jumlah && $request->jumlah > 0) {
            DB::table('aset_pengalihan')->insert([
                'nama_Aset' => $aset_tetap->nama_Aset,
                'jenis_Pengalihan' => $request->jenis_Pengalihan,
                'jumlah' => $request->jumlah,
                'lokasi_Pengalihan' => $request->lokasi_Pengalihan,
                'id_Aset' => $request->id_Aset
            ]);

            $jumlah_aset_tetap = $aset_tetap->jumlah - $request->jumlah;
            DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->update([
                'jumlah' => $jumlah_aset_tetap
            ]);
    
            // Hitung jumlah records aset pengalihan
            $count_aset_pengalihan = DB::table('aset_pengalihan')->count();
            DB::table('rekapitulasi')->where('id',6)->update([
                'kuantitas' => $count_aset_pengalihan
            ]);
            
            // Hitung jumlah records aset tetap
            $count_aset_tetaps = DB::table('aset_tetaps')->count();
            DB::table('rekapitulasi')->where('id',1)->update([
                'kuantitas' => $count_aset_tetaps
            ]);

            return redirect('/AsetPengalihan');
    
        } elseif ($aset_tetap->jumlah == $request->jumlah && $request->jumlah > 0) {
            DB::table('aset_pengalihan')->insert([
                'nama_Aset' => $aset_tetap->nama_Aset,
                'jenis_Pengalihan' => $request->jenis_Pengalihan,
                'jumlah' => $request->jumlah,
                'lokasi_Pengalihan' => $request->lokasi_Pengalihan,
                'id_Aset' => $request->id_Aset
            ]);

            $aset_perbaikans = DB::table('aset_perbaikans')->where('id_Aset',$request->id_Aset)->first();
            
            DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->delete();
        
            $count_aset_pengalihan = DB::table('aset_pengalihan')->count();
            DB::table('rekapitulasi')->where('id',6)->update([
                'kuantitas' => $count_aset_pengalihan
            ]);
            
            // Hitung jumlah records aset tetap
            $count_aset_tetaps = DB::table('aset_tetaps')->count();
            DB::table('rekapitulasi')->where('id',1)->update([
                'kuantitas' => $count_aset_tetaps
            ]);

            // Hitung jumlah records aset tetap
            $count_aset_tetaps = DB::table('aset_tetaps')->count();
            DB::table('rekapitulasi')->where('id',1)->update([
                'kuantitas' => $count_aset_tetaps
            ]);

            return redirect('/AsetPengalihan');
            
        } elseif ($request->jumlah == 0) {
            Session::flash('error','jumlah tidak boleh nol');
		    return redirect('/AsetPengalihan/tambah');
        }
        else {
            Session::flash('error','Stok tidak tersedia');
		    return redirect('/AsetPengalihan/tambah');
        }
    }
    
    public function edit($id_Aset_Pengalihan)
    {
        $aset_pengalihan = DB::table('aset_pengalihan')->where('id_Aset_Pengalihan',$id_Aset_Pengalihan)->get();

        return view('asetPengalihan.editAsetPengalihan',['aset_pengalihan' => $aset_pengalihan]);
    }

    public function update(Request $request)
    {
        DB::table('aset_pengalihan')->where('id_Aset',$request->id_Aset)->update([
            'nama_Aset' => $request->nama_Aset,
            'jenis_Pengalihan' => $request->jenis_Pengalihan,
            'jumlah' => $request->jumlah,
            'lokasi_Pengalihan' => $request->lokasi_Pengalihan
        ]);

        return redirect('/AsetPengalihan');
    }

    public function hapus($id_Aset_Pengalihan)
    {
        $aset_pengalihan = DB::table('aset_pengalihan')->where('id_Aset_Pengalihan',$id_Aset_Pengalihan)->first();
        $aset_tetaps = DB::table('aset_tetaps')->where('id_Aset',$aset_pengalihan->id_Aset)->first();

        if ($aset_tetaps != null) {
            $stok_aset_tetaps = $aset_pengalihan->jumlah + $aset_tetaps->jumlah;

            DB::table('aset_tetaps')->where('id_Aset',$aset_tetaps->id_Aset)->update([
                'jumlah' => $stok_aset_tetaps
            ]);
        }

        DB::table('aset_pengalihan')->where('id_Aset_Pengalihan',$id_Aset_Pengalihan)->delete();

        $count_aset_pengalihan = DB::table('aset_pengalihan')->count();
        
        DB::table('rekapitulasi')->where('id',6)->update([
            'kuantitas' => $count_aset_pengalihan
        ]);

        return redirect('/AsetPengalihan');
    }
}
