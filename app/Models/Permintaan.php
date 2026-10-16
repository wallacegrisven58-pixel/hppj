<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
        protected $fillable = [
        'kode', 'layanan', 'jumlah', 'mulai_tugas',
        'perusahaan', 'kontak', 'status',
    ];
}
