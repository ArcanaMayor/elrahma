<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model {
    protected $fillable = ['prodi_id', 'kode', 'nama', 'sks', 'semester', 'prasyarat'];

    public function prodi() {
        return $this->belongsTo(Prodi::class);
    }
}
