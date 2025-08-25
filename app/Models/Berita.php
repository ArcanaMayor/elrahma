<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // nama tabel kalau bukan "beritas"
    // protected $table = 'berita';

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];
}
