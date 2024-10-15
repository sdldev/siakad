<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ConfigController;

use App\Models\Slider;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('/slider', function () {
    // Mengambil data slider dari database
    $sliders = Slider::select('image', 'text')->get();
    return response()->json($sliders);
});

Route::prefix('dashboard')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        
        Route::resource('/categories', \App\Http\Controllers\Dashboard\CategoryController::class);
        Route::resource('/posts', \App\Http\Controllers\Dashboard\PostController::class);
        Route::resource('/sliders', \App\Http\Controllers\Dashboard\SliderController::class);

        Route::get('/config', [ConfigController::class, 'index'])->name('config.index');
        Route::patch('/config', [ConfigController::class, 'update'])->name('config.update');

    });
});
require __DIR__.'/auth.php';
