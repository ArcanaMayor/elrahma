<?php

use Illuminate\Support\Facades\Route;

// Controllers (Frontend & Umum)
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DownloadController;

// Admin Controllers
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\ProdiInfoController;
use App\Http\Controllers\Admin\MataKuliahController;

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD (Admin)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
*/
// User dashboard → disamakan dengan konvensi resource index
Route::get('/user/dashboard', function () {
    return view('users.index');
})->middleware('auth')->name('users.index');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Galeri
    Route::resource('galeri', GaleriController::class);

    // About
    Route::resource('about', AboutController::class)->only(['index', 'create', 'store', 'edit', 'update']);

    // Berita
    Route::resource('berita', BeritaController::class)->parameters([
        'berita' => 'berita'
    ]);

    // Prodi & child resources
    Route::resource('prodi', ProdiController::class);
    Route::resource('prodi.infos', ProdiInfoController::class);
    Route::resource('prodi.mataKuliahs', MataKuliahController::class);

    // Kontak (Admin)
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
    Route::get('/kontak/{kontak}', [KontakController::class, 'show'])->name('kontak.show');
    Route::delete('/kontak/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy');

});

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (HOME / FRONTEND)
|--------------------------------------------------------------------------
*/
// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Berita publik
Route::resource('berita', BeritaController::class)->only(['index', 'show']);

// Form kirim pesan kontak
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');


// ✅ Menus publik (bukan admin)
Route::resource('menus', MenuController::class)->only(['index', 'show']);

