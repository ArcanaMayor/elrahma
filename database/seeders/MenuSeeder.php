<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menu Utama
        $beranda = Menu::create([
            'nama' => 'Beranda',
            'url' => '/',
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Menu Tentang dengan submenu
        $tentang = Menu::create([
            'nama' => 'Tentang',
            'url' => null,
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Submenu Tentang
        Menu::create([
            'nama' => 'Profil STMIK El Rahma',
            'url' => '/tentang/profil',
            'parent_id' => $tentang->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Visi & Misi',
            'url' => '/tentang/visi-misi',
            'parent_id' => $tentang->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Sejarah',
            'url' => '/tentang/sejarah',
            'parent_id' => $tentang->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Struktur Organisasi',
            'url' => '/tentang/struktur-organisasi',
            'parent_id' => $tentang->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Fasilitas',
            'url' => '/tentang/fasilitas',
            'parent_id' => $tentang->id,
            'aktif' => true,
        ]);

        // Menu Program Studi dengan submenu
        $prodi = Menu::create([
            'nama' => 'Program Studi',
            'url' => null,
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Submenu Program Studi
        Menu::create([
            'nama' => 'Informatika (S1)',
            'url' => '/prodi/informatika',
            'parent_id' => $prodi->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Sistem Informasi (S1)',
            'url' => '/prodi/sistem-informasi',
            'parent_id' => $prodi->id,
            'aktif' => true,
        ]);

        // Menu Akademik dengan submenu
        $akademik = Menu::create([
            'nama' => 'Akademik',
            'url' => null,
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Submenu Akademik
        Menu::create([
            'nama' => 'Kalender Akademik',
            'url' => '/akademik/kalender',
            'parent_id' => $akademik->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Kurikulum',
            'url' => '/akademik/kurikulum',
            'parent_id' => $akademik->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Dosen',
            'url' => '/akademik/dosen',
            'parent_id' => $akademik->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Perpustakaan',
            'url' => '/akademik/perpustakaan',
            'parent_id' => $akademik->id,
            'aktif' => true,
        ]);

        // Menu PMB (Penerimaan Mahasiswa Baru) dengan submenu
        $pmb = Menu::create([
            'nama' => 'PMB',
            'url' => null,
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Submenu PMB
        Menu::create([
            'nama' => 'Info Pendaftaran',
            'url' => '/pmb/info-pendaftaran',
            'parent_id' => $pmb->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Jalur Masuk',
            'url' => '/pmb/jalur-masuk',
            'parent_id' => $pmb->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Biaya Kuliah',
            'url' => '/pmb/biaya-kuliah',
            'parent_id' => $pmb->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Beasiswa',
            'url' => '/pmb/beasiswa',
            'parent_id' => $pmb->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Daftar Online',
            'url' => '/pmb/daftar-online',
            'parent_id' => $pmb->id,
            'aktif' => true,
        ]);

        // Menu Berita
        $berita = Menu::create([
            'nama' => 'Berita',
            'url' => '/berita',
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Menu Galeri
        $galeri = Menu::create([
            'nama' => 'Galeri',
            'url' => '/galeri',
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Menu Download dengan submenu
        $download = Menu::create([
            'nama' => 'Download',
            'url' => null,
            'parent_id' => null,
            'aktif' => true,
        ]);

        // Submenu Download
        Menu::create([
            'nama' => 'Sertifikat Akreditasi',
            'url' => '/download/sertifikat-akreditasi',
            'parent_id' => $download->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Brosur Digital',
            'url' => '/download/brosur-digital',
            'parent_id' => $download->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Panduan Mahasiswa',
            'url' => '/download/panduan-mahasiswa',
            'parent_id' => $download->id,
            'aktif' => true,
        ]);

        Menu::create([
            'nama' => 'Formulir',
            'url' => '/download/formulir',
            'parent_id' => $download->id,
            'aktif' => true,
        ]);

        // Menu Kontak
        $kontak = Menu::create([
            'nama' => 'Kontak',
            'url' => '/kontak',
            'parent_id' => null,
            'aktif' => true,
        ]);
    }
}