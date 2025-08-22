<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            // parent_id untuk relasi menu anak ke menu induk
            $table->unsignedBigInteger('parent_id')->nullable();

            $table->string('nama');
            $table->string('url')->nullable();
            $table->string('ikon')->nullable();  
            $table->boolean('aktif')->default(true); 
            $table->timestamps();

            // foreign key ke tabel menus (self-relation)
            $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
