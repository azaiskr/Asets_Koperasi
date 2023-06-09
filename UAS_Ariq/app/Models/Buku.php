<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'IDBuku', 'Judul', 'Penulis', 'Penerbit', 'TahunTerbit', 'JumlahStok', 'DendaBuku',
    ];
    protected $table = 'buku';
}
