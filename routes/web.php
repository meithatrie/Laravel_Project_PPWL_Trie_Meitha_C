<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// User (halaman utama)
Route::get('/', function () {
    return view('user.home');
})->name('home');

// Admin Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

// Produk (CRUD - Admin)
Route::resource('products', ProductController::class)
    ->middleware(['auth', 'admin']);

// Profile (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
