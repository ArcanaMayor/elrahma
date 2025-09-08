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
    Schema::create('downloads', function (Blueprint $table) {
        $table->id();
        $table->string('title');        // Judul file
        $table->string('slug')->unique(); // Untuk URL
        $table->string('image')->nullable(); // Gambar cover/thumbnail
        $table->string('file');         // Path file download
        $table->text('description')->nullable(); // Deskripsi
        $table->integer('reading_time')->default(1); // waktu baca (optional)
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('download_tables');
    }
};
