<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// mis rutas
Route::view("/",'welcome')->name('welcome');
Route::view("/about",'about')->name('about');
Route::view("/services",'services')->name('services');
Route::view("/contact",'contact')->name('contact');
Route::view("/gallery",'gallery')->name('gallery'); 
Route::view("/blog",'blog')->name('blog');
 

// rutas de autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
