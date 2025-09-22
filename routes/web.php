<?php

use Illuminate\Support\Facades\Route;

// Controllers Frontend & Umum
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

// Admin Controllers
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\ProdiInfoController;
use App\Http\Controllers\Admin\MataKuliahController;
use App\Http\Controllers\Admin\DownloadController;

// Frontend Berita Controller
use App\Http\Controllers\BeritaController as FrontendBeritaController;

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

// ✅ dashboard user diarahkan ke UserController@index
Route::get('/user/dashboard', [UserController::class, 'index'])
    ->middleware('auth')
    ->name('users.index');

// Create & Store User
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Edit, Update, Delete User
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

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

    // Berita Admin
    Route::resource('berita', AdminBeritaController::class);

    // Prodi & child resources
    Route::resource('prodi', ProdiController::class);
    Route::resource('prodi.infos', ProdiInfoController::class)->parameters([
        'prodi' => 'prodi',
        'infos' => 'info'
    ]);

    // MataKuliah pakai snake_case + parameter binding
    Route::resource('prodi.mata_kuliah', MataKuliahController::class);

    // Kontak (Admin)
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
    Route::get('/kontak/{kontak}', [KontakController::class, 'show'])->name('kontak.show');
    Route::delete('/kontak/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy');

    // Download Admin
    Route::resource('downloads', DownloadController::class);
});

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (Frontend / Home)
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Berita publik pakai FrontendBeritaController
Route::resource('berita', AdminBeritaController::class)->only(['index', 'show']);

// Form kirim pesan kontak
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');

// Menus publik (bukan admin)
Route::resource('menus', MenuController::class)->only(['index', 'show']);