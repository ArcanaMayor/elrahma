<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = ['nama', 'email', 'pesan'];
    
    // Jika ada relasi, tambahkan di sini
    // Contoh: public function user() { return $this->belongsTo(User::class); }
}
