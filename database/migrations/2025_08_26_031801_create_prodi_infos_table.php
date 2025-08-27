<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prodi_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id')->constrained()->onDelete('cascade');
            $table->string('judul'); // Visi, Misi, Tujuan, Profil Lulusan
            $table->longText('deskripsi');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi_infos');
    }
};
