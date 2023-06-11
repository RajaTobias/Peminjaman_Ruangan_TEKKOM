<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = "ruangans";

    protected $fillable = [
        'Nama_ruangan',
        'Jenis_ruangan',
        'image', 
        'kursi', 
        'smart_tv',
        'layar_proyektor',
        'lcd_proyektor',
        'ac',
        'kapasitas'
    ];
}
