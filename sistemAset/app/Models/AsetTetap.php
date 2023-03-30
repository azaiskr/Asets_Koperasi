<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetTetap extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_Aset', 'nama_Aset', 'status_Perbaikan', 'tanggal_Perbaikan', 'pj_Perbaikan'
    ];
}
