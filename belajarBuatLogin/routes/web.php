<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/enkripsi', [BelajarController::class, 'enkripsi']);
Route::get('/data', [BelajarController::class, 'data']);
Route::get('/data/{data_rahasia}', [BelajarController::class, 'data_proses']);

Route::get('/hash', [BelajarController::class, 'hash']);
require __DIR__.'/auth.php';
