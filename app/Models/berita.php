<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = [
        'kategori_id',
        'judul',
        'penulis',
        'gambar',
        'isi'
    ];
}
