<?php

// app/Models/ProdiInfo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdiInfo extends Model {
    protected $fillable = ['prodi_id', 'judul', 'deskripsi'];

    public function prodi() {
        return $this->belongsTo(Prodi::class);
    }
}
