<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Download;

class DownloadSeeder extends Seeder
{
    public function run(): void
    {
        // generate 20 data palsu
        Download::factory()->count(20)->create();
    }
}
