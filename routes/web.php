<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/posts');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts-list');
Route::get('/post/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post');

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

    Route::resource('/admin/posts', \App\Http\Controllers\PostController::class);
});
