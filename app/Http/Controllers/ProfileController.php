<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Home user
Route::get('/', function () {
    return view('user.home');
})->name('home');

// Dashboard admin (Sneat)
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

// CRUD Produk (Sneat)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', ProductController::class);
});

// Breeze profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
