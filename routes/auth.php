<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\auth\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::controller(SocialiteController::class)->group(function () {
    Route::get('/login/google', 'redirectToGoogle')->name('google.login');
    Route::get('/login/google/callback', 'handleGoogleCallback')->name('google.handleGoogleCallback');
    Route::get('/login/facebook', 'redirectTofacebook')->name('facebook.login');
    Route::get('/login/facebook/callback', 'handlefacebookCallback')->name('facebook.handlefacebookCallback');
    Route::get('/login/github', 'redirectTogithub')->name('github.login');
    Route::get('/login/github/callback', 'handlegithubCallback')->name('github.handlegithubCallback');
});
