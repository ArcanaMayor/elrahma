<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DownloadSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title' => 'Panduan Akademik 2025',
                'file' => 'downloads/panduan-akademik-2025.pdf',
                'description' => 'Dokumen panduan akademik tahun 2025 untuk mahasiswa.',
            ],
            [
                'title' => 'Jadwal Kuliah Semester Ganjil',
                'file' => 'downloads/jadwal-kuliah-ganjil.pdf',
                'description' => 'Jadwal perkuliahan untuk semester ganjil tahun ajaran 2025/2026.',
            ],
            [
                'title' => 'Formulir Pengajuan Cuti Kuliah',
                'file' => 'downloads/form-cuti.pdf',
                'description' => 'Formulir resmi pengajuan cuti kuliah bagi mahasiswa.',
            ],
        ];

        foreach ($data as $item) {
            DB::table('downloads')->insert([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']), // slug otomatis
                'file' => $item['file'],
                'description' => $item['description'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
