<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use app\Models\pj_perbaikan;

class pj_perbaikan extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_pj';
    protected $fillable = ['id_pj', 'nama_pj', 'no_Hp'];
    protected $attributes = [
        'nama_pj' => 'Tidak diketahui',
        'no_Hp'=>'N/A',
    ];
    public $timestamps=false;


}
