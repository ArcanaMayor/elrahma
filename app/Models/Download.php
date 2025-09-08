<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Download extends Model
{
    protected $fillable = ['title','slug','image','file','description','reading_time'];

    // Auto generate slug
    protected static function booted()
    {
        static::creating(function ($download) {
            $download->slug = Str::slug($download->title);
        });
    }
}
