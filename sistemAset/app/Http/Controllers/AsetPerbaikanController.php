<?php

namespace App\Http\Controllers;
use App\Models\asetPerbaikan;
use App\Models\pj_perbaikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AsetPerbaikanController extends Controller
{

    public function index()
    {
        
        $aset = asetPerbaikan::all();
        $pj = pj_perbaikan::all();
        $aset_tetaps = DB::table('aset_tetaps')->get();
        
        return view('asetPerbaikan.daftarAset', compact('aset','pj','aset_tetaps'));
    }

    public function create()
    {
        $pj_perbaikans = DB::table('pj_perbaikans')->get();
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetPerbaikan.tambahAset', ['pj_perbaikans'=> $pj_perbaikans, 'aset_tetaps'=> $aset_tetaps]);
    }

    public function store(Request $request)
    {
        $aset_tetaps = DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->first();
        if ($aset_tetaps->jumlah >= $request->jumlah) {
            
            asetPerbaikan::create([
                'id_Aset' => $request->id_Aset,
                'jumlah' => $request->jumlah,
                'status_perbaikan'=>$request->status,
                'tanggal_perbaikan'=>$request->tanggal,
                'pj_perbaikan'=>$request->servicer,
            ]);

            $jumlah_aset_tetap = $aset_tetaps->jumlah - $request->jumlah;
            DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->update([
                'jumlah' => $jumlah_aset_tetap
            ]);
    
            $count_aset_perbaikans = DB::table('aset_perbaikans')->count();
    
            DB::table('rekapitulasi')->where('id',4)->update([
                'kuantitas' => $count_aset_perbaikans
            ]);
            
    
            return redirect('/asetPerbaikan')->with('status', 'DATA BERHASIL DITAMBAHKAN!');
        } else {
            Session::flash('error','Jumlah aset melebih stok');
		    return redirect('/asetPerbaikan/create');
        }
    }


    public function show(asetPerbaikan $asetPerbaikan)
    {
        //
    }

    public function edit($id)
    {
        $aset = asetPerbaikan::find($id);
        $aset_tetaps = DB::table('aset_tetaps')->get();

        return view('asetPerbaikan.editAset', compact('aset', 'aset_tetaps'));
    }

    public function update($id,Request $request)
    {
        $aset = asetPerbaikan::find($id);
        $aset->id_aset_perbaikan = $request->id;
        $aset->id_Aset = $request->id_Aset;
        $aset->status_perbaikan = $request->status;
        $aset->tanggal_perbaikan = $request->tanggal;
        $aset->pj_perbaikan = $request->servicer;
        $aset->save();
        return redirect('/asetPerbaikan')->with('status', 'DATA BERHASIL DIUPDATE!');
    }

    public function destroy($id)
    {
        $aset = asetPerbaikan::find($id);
        $aset_tetaps = DB::table('aset_tetaps')->where('id_Aset',$aset->id_Aset)->first();
        $stok_aset_tetaps = $aset->jumlah + $aset_tetaps->jumlah;

        DB::table('aset_tetaps')->where('id_Aset',$aset_tetaps->id_Aset)->update([
            'jumlah' => $stok_aset_tetaps
        ]);

        $aset->delete();
        $count_aset_perbaikans = DB::table('aset_perbaikans')->count();
        
        DB::table('rekapitulasi')->where('id',4)->update([
            'kuantitas' => $count_aset_perbaikans
        ]);

        return redirect('/asetPerbaikan')->with('danger', 'DATA BERHASIL DIHAPUS!');
    }
}
