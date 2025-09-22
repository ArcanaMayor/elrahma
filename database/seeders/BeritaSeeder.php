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
                'judul' => 'Peluncuran Website Bank Sampah',
                'isi'   => 'Website bank sampah resmi diluncurkan untuk mempermudah masyarakat dalam mengelola sampah dan mendapatkan manfaat ekonomi.',
                'gambar'=> 'bank-sampah-launch.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'judul' => 'Edukasi Pengelolaan Sampah Plastik',
                'isi'   => 'Kegiatan edukasi ini bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya mengurangi penggunaan plastik sekali pakai.',
                'gambar'=> 'edukasi-plastik.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'judul' => 'Kolaborasi dengan Sekolah Lingkungan',
                'isi'   => 'Bank Sampah bekerja sama dengan sekolah untuk mengajarkan anak-anak bagaimana memilah sampah sejak dini.',
                'gambar'=> 'sekolah-lingkungan.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
