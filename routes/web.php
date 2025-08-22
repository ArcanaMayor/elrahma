<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MediaController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
Route::resource('infos', \App\Http\Controllers\InfoController::class);

Route::get('/user/dashboard', function () {
    return view('users.index');
})->middleware('auth');

use App\Http\Controllers\KontakController;

Route::post('/kontak/kirim', [KontakController::class, 'store'])->name('kontak.kirim');


Route::middleware([LogVisitor::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/tentang', function () {
//     return view('about');
// });

use App\Http\Controllers\GaleriController;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::delete('/galeri/{galeri}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('galeri', GaleriController::class);
});

// use App\Http\Controllers\Admin\NewsController;


// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('news', \App\Http\Controllers\Admin\AdminNewsController::class);
// });
    
use App\Http\Controllers\Admin\AboutController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('about', AboutController::class)->only(['index', 'create', 'store', 'edit', 'update']);
});

