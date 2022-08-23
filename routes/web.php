<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;




Route::get('/', [SiteController::class, 'index'])->name('home');

Route::prefix('site')->group(function () {
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::get('/reviews', [SiteController::class, 'reviews'])->name('reviews');
});

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register.create');
    Route::post('/register/submit', [RegisterController::class, 'submit'])->name('register.submit');
    Route::get('/login', [LoginController::class, 'get'])->name('login');
    Route::post('/login/submit', [LoginController::class, 'submit'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::prefix('posts')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
});

Route::prefix('comment')->group(function () {
    Route::get('/leave', [CommentController::class, 'leave'])->name('comment.leave');
    Route::post('/submit', [CommentController::class, 'submit'])->name('comment.submit');
});