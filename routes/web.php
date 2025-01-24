<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MediaController;   
use Illuminate\Support\Facades\Route;

// mis rutas para FB 
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

// rutas para crear un nuevo medio 

Route::get('/media', [MediaController::class, 'create'])->name('media');  

Route::post('/media/create', [MediaController::class, 'storage'])->name('media.create');  

require __DIR__.'/auth.php';
