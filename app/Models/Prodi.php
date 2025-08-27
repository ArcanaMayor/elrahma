<?php

// app/Models/Prodi.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model {
    protected $fillable = ['nama', 'akreditasi'];

    public function infos() {
        return $this->hasMany(ProdiInfo::class);
    }

    public function mataKuliahs() {
        return $this->hasMany(MataKuliah::class);
    }
}
