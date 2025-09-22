<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangElrahma extends Model
{
    use HasFactory;

    protected $table = 'tentang_elrahma';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'gambar',
        'link',
    ];
}
