<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        // generate 10 gambar dummy
        Galeri::factory()->count(10)->create();
    }
}
