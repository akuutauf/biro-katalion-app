<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // Route Landing page dan logout route
    Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');
    Route::get('/logout', [AuthController::class, 'do_logout'])->name('auth.do.logout');

    // Route Guest
    Route::group(['middleware' => ['guest']], function () {
        // Route Auth
        Route::get('/login', [AuthController::class, 'login'])->name('auth.login.page');
        Route::post('/login', [AuthController::class, 'do_login'])->name('auth.do.login');
    });
});
