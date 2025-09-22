<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        // generate 15 data galeri dummy tanpa deskripsi
        Galeri::factory()->count(15)->create();
    }
}
