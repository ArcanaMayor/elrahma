<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\HalamanSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        ]);

        $this->call([
        ProdiSeeder::class, 
        TentangElrahmaSeeder::class, 
        BeritaSeeder::class, 
        GaleriSeeder::class, 
        DownloadSeeder::class,
        MenuSeeder::class,
        AdminSeeder::class,
        AboutSeeder::class
        ]);


    }
}
