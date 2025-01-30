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
Route::get('/dashboard', [MediaController::class,'index'])->middleware('auth', 'verified')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// rutas para crear un nuevo medio 

Route::get('/media/create', [MediaController::class, 'create'])->middleware('auth')->name('media.create');

// ruta para almacenar nuevo medio

Route::post('/media', [MediaController::class, 'store'])->middleware('auth')->name('media.store');

//ruta para editar un medio

Route::get('/media/edit/{$id}', [MediaController::class, 'edit'])->middleware('auth')->name('media.edit');

// RUTA PARA ACTUALIZAR UN MEDIO

Route::put('/media/{$id}', [MediaController::class, 'update'])->middleware('auth')->name('media.update');

// Ruta para eliminar un medio
Route::delete('/media/delete/{$id}', [MediaController::class,'delete'])->middleware('auth')->name('media.destroy');

require __DIR__.'/auth.php';
