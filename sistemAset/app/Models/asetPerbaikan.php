<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asetPerbaikan extends Model
{
    //use HasFactory;
    protected $primaryKey ="id_aset_perbaikan";
    protected $table = 'aset_perbaikans';
    protected $fillable = ["id_Aset", 
                            "jumlah",
                            "status_perbaikan",
                            "tanggal_perbaikan",
                            "pj_perbaikan",]; 
    public $timestamps = false;
    
}
