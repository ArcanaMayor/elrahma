<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HalamanController;

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
Route::get('/admin/dashboard', function () {
return view('admin.dashboard'); // Buat view sederhana untuk dashboard
})->name('dashboard');
});

Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('kategoris', KategoriController::class);
Route::resource('infos', InfoController::class);
Route::resource('menus', \App\Http\Controllers\MenuController::class);
Route::resource('kontaks', \App\Http\Controllers\KontakController::class);
Route::resource('media', \App\Http\Controllers\MediaController::class);
Route::resource('media', \App\Http\Controllers\MediaController::class)->parameters([
    'media' => 'media',
]);
Route::resource('galeri', \App\Http\Controllers\GaleriController::class)->parameters([
    'galeri' => 'galeri'
]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
Route::resource('infos', \App\Http\Controllers\InfoController::class);

Route::get('/user/dashboard', function () {
    return view('users.index');
})->middleware('auth');



// Halaman statis dinamis
Route::get('/halaman/{slug}', [HalamanController::class, 'show'])->name('halaman.show');

// Form kirim kontak (khusus halaman kontak)
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');
use App\Http\Middleware\LogVisitor;

Route::middleware([LogVisitor::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

