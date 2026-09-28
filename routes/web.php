<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PermohonanKonsulController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // Route Landing page dan logout route
    Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');

    // Route Guest
    Route::group(['middleware' => ['guest']], function () {
        // Route Auth
        Route::get('/login', [AuthController::class, 'login'])->name('auth.login.page');
        Route::post('/login', [AuthController::class, 'do_login'])->name('auth.do.login');
        Route::get('/register', [AuthController::class, 'register'])->name('auth.register.page');
        Route::post('/register', [AuthController::class, 'do_register'])->name('auth.do.register');

        // Route Permohonan Konsul
        Route::get('/permohonan-konsul', [PermohonanKonsulController::class, 'index'])->name('permohonan.konsul.page');
    });

    // Route Auth
    Route::group(['middleware' => ['auth']], function () {
        // Route Logout
        Route::get('/logout', [AuthController::class, 'do_logout'])->name('auth.do.logout');
    });
});
