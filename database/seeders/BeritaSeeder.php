<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'judul' => 'Kuliah Umum Teknologi AI',
                'isi'   => 'Jurusan mengadakan kuliah umum tentang perkembangan Artificial Intelligence dengan menghadirkan pembicara dari industri teknologi.',
                'gambar'=> 'kuliah-umum-ai.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'judul' => 'Seminar Nasional Teknologi Informasi',
                'isi'   => 'Mahasiswa mengikuti seminar nasional yang membahas tren terbaru dalam dunia teknologi informasi, termasuk cloud computing dan keamanan siber.',
                'gambar'=> 'seminar-nasional.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'judul' => 'Lomba Inovasi Aplikasi',
                'isi'   => 'Tim mahasiswa berhasil meraih juara 1 lomba inovasi aplikasi tingkat regional dengan aplikasi manajemen belajar berbasis web.',
                'gambar'=> 'lomba-aplikasi.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
