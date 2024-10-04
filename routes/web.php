<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::prefix('dashboard')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        
        Route::resource('/categories', \App\Http\Controllers\Dashboard\CategoryController::class);
        Route::resource('/posts', \App\Http\Controllers\Dashboard\PostController::class);

    });
});
require __DIR__.'/auth.php';
