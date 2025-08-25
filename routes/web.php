<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\HomeController;

// ================== AUTH ==================
Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

// ================== DASHBOARD (Admin) ==================
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ================== RESOURCE UMUM ==================
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('kategoris', KategoriController::class);
Route::resource('infos', InfoController::class);
Route::resource('menus', MenuController::class);
Route::resource('kontaks', KontakController::class);

// ================== USER DASHBOARD ==================
Route::get('/user/dashboard', function () {
    return view('users.index');
})->middleware('auth');

// ================== KONTAK KIRIM ==================
Route::post('/kontak/kirim', [KontakController::class, 'store'])->name('kontak.kirim');

// ================== ADMIN (prefix admin.) ==================
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('galeri', GaleriController::class);
    Route::resource('about', AboutController::class)
        ->only(['index', 'create', 'store', 'edit', 'update']);
    Route::resource('berita', BeritaController::class)
        ->parameters(['berita' => 'berita']); // admin kelola berita
});

// ================== HOME / PUBLIC ==================
Route::get('/', [HomeController::class, 'index'])->name('home');

// publik hanya bisa lihat berita
Route::resource('berita', BeritaController::class)->only(['index', 'show']);
