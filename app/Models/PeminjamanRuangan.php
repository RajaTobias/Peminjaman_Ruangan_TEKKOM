<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanRuangan extends Model
{
    protected $table = "peminjaman_ruangans";
 
    protected $fillable = ['Keperluan','Jam_mulai','Jam_selesai', 'is_accept', 'ruangan_id'];
}
