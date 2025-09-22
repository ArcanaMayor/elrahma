<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\HalamanSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
        'name' => 'Test User',
        'email' => 'admin@example.com', // ubah dari test@example.com
        ]);

        $this->call([
        ProdiSeeder::class, 
        TentangElrahmaSeeder::class, 
        BeritaSeeder::class, 
        GaleriSeeder::class, 
        DownloadSeeder::class,
        ]);


    }
}
