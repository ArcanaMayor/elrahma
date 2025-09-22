<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TentangElrahma;
use Illuminate\Support\Str;

class TentangElrahmaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Sejarah El Rahma',
                'slug' => Str::slug('Sejarah El Rahma'),
                'deskripsi' => 'El Rahma berdiri sejak tahun 1995 dengan visi mencetak generasi unggul berakhlak mulia.',
                'gambar' => 'tentang_elrahma/sejarah.jpg',
                'link' => 'https://elrahma.sch.id/sejarah'
            ],
            [
                'judul' => 'Visi & Misi',
                'slug' => Str::slug('Visi & Misi'),
                'deskripsi' => 'Visi kami adalah menjadi lembaga pendidikan unggul. Misi kami adalah mendidik siswa agar siap menghadapi era global.',
                'gambar' => 'tentang_elrahma/visi-misi.jpg',
                'link' => 'https://elrahma.sch.id/visi-misi'
            ],
            [
                'judul' => 'Fasilitas Sekolah',
                'slug' => Str::slug('Fasilitas Sekolah'),
                'deskripsi' => 'Kami menyediakan fasilitas lengkap seperti laboratorium, perpustakaan, dan ruang multimedia.',
                'gambar' => 'tentang_elrahma/fasilitas.jpg',
                'link' => null
            ]
        ];

        foreach ($data as $item) {
            TentangElrahma::create($item);
        }
    }
}
