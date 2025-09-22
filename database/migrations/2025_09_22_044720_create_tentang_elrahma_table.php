<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tentang_elrahma', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->string('gambar')->nullable(); // untuk url gambar
            $table->string('link')->nullable();   // untuk tombol "Selanjutnya"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tentang_elrahma');
    }
};
