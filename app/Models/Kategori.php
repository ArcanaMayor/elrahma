<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
use HasFactory;

protected $table = 'kategoris';

protected $fillable = [
'nama',
'deskripsi',
];
public function infos()
{
    return $this->hasMany(Info::class);
}
}   
