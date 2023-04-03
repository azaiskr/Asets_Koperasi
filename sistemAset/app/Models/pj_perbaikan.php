<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pj_perbaikan extends Model
{
    //use HasFactory;
    
    //protected $guarded = 'id_pj';
    protected $primaryKey = 'id_pj';
    protected $fillable = ["nama_pj", "no_Hp"];
    public $timestamps = false;


}
