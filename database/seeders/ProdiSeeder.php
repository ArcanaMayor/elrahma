<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodi;
use App\Models\Info;
use App\Models\MataKuliah;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        // Tambah Prodi Informatika
        $informatika = Prodi::create([
            'nama' => 'Informatika',
            'akreditasi' => 'A',
        ]);

        // Tambah Info untuk Informatika
        Info::create([
            'prodi_id' => $informatika->id,
            'judul' => 'Visi',
            'deskripsi' => 'Menjadi program studi unggul dalam bidang informatika di tingkat nasional dan internasional.'
        ]);

        Info::create([
            'prodi_id' => $informatika->id,
            'judul' => 'Misi',
            'deskripsi' => "- Menyelenggarakan pendidikan berkualitas\n- Menghasilkan penelitian inovatif\n- Mengabdi pada masyarakat melalui teknologi"
        ]);

        Info::create([
            'prodi_id' => $informatika->id,
            'judul' => 'Tujuan',
            'deskripsi' => "Menghasilkan lulusan yang kompeten, profesional, dan berdaya saing global."
        ]);

        // Tambah Mata Kuliah
        $mataKuliahs = [
            ['kode' => 'IF101', 'nama' => 'Pengantar Informatika', 'sks' => 3, 'semester' => 1, 'prasyarat' => null],
            ['kode' => 'IF102', 'nama' => 'Algoritma & Struktur Data', 'sks' => 3, 'semester' => 2, 'prasyarat' => 'IF101'],
            ['kode' => 'IF201', 'nama' => 'Basis Data', 'sks' => 3, 'semester' => 3, 'prasyarat' => 'IF102'],
            ['kode' => 'IF202', 'nama' => 'Pemrograman Web', 'sks' => 3, 'semester' => 4, 'prasyarat' => 'IF102'],
            ['kode' => 'IF301', 'nama' => 'Kecerdasan Buatan', 'sks' => 3, 'semester' => 5, 'prasyarat' => 'IF201'],
        ];

        foreach ($mataKuliahs as $mk) {
            MataKuliah::create(array_merge($mk, ['prodi_id' => $informatika->id]));
        }

        // Bisa tambah Prodi lain juga
        $si = Prodi::create([
            'nama' => 'Sistem Informasi',
            'akreditasi' => 'B',
        ]);

        Info::create([
            'prodi_id' => $si->id,
            'judul' => 'Visi',
            'deskripsi' => 'Menjadi program studi unggulan di bidang sistem informasi yang berorientasi pada industri.'
        ]);

        MataKuliah::create([
            'prodi_id' => $si->id,
            'kode' => 'SI101',
            'nama' => 'Pengantar Sistem Informasi',
            'sks' => 3,
            'semester' => 1,
        ]);
        $this->call([
            ProdiSeeder::class,
        ]);
    }
}
