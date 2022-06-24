<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/admin', function () {
        return redirect(route('login'));
    });
    Route::get('/admin/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return redirect(route('posts.index'));
    });

    Route::get('/admin/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/admin/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');
});
