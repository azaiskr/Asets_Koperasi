<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\pj_perbaikan;

class pj_perbaikan extends Model
{
    use HasFactory;
    
    protected $table = 'pj_perbaikans';
    protected $guarded = 'id_pj';
    protected $fillable = ['nama_pj', 'no_Hp'];
    protected $attributes = [
        'nama_pj' => "test",
        'no_Hp'=>"double",
    ];
    public $timestamps=false;


}
