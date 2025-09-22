<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'title' => 'Tentang Program Studi',
                'description' => 'Program Studi Pengembangan Perangkat Lunak berfokus pada pembelajaran pemrograman, basis data, pengembangan aplikasi web, mobile, dan kecerdasan buatan. Mahasiswa dibekali dengan keterampilan teknis sekaligus kemampuan berpikir kritis.',
                'image' => 'prodi.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Visi & Misi',
                'description' => 'Visi: Menjadi program studi unggulan dalam bidang teknologi informasi. 
                Misi: (1) Menyelenggarakan pendidikan berkualitas, (2) Menghasilkan lulusan yang kompeten dan berdaya saing, (3) Mendorong penelitian dan inovasi di bidang perangkat lunak.',
                'image' => 'visi-misi.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Kegiatan Mahasiswa',
                'description' => 'Mahasiswa aktif dalam berbagai kegiatan akademik maupun non-akademik, seperti seminar teknologi, lomba coding, pengabdian masyarakat, dan organisasi kemahasiswaan.',
                'image' => 'kegiatan-mahasiswa.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
