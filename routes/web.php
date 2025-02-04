<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Routes pour la page d'acceuil
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/ressource', [PageController::class, 'ressource'])->name('ressource');
