<?php

use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('landing');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

    Route::get('auth/google', [OauthController::class, 'redirectToProvider'])->name('auth.google');
    Route::get('auth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('auth.google.callback');
});


Route::group(['middleware' => 'nologin'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'user'], function () {
        Route::get('/dashboard', [UserController::class, 'dashboard']);

        Route::get('/history', [UserController::class, 'history']);


        Route::post('/upload', [UserController::class, 'store'])->name('upload');
        Route::get('/result/{id}', [UserController::class, 'show'])->name('result');
        Route::post('/result/{id}/review', [UserController::class, 'review'])->name('review');

        Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::put('/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    });
    
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/admin/control', [AdminController::class, 'control']);
        Route::get('/admin/control/{id}/delete', [AdminController::class, 'delete']);
        Route::get('/admin/manage', [AdminController::class, 'manage']);
        Route::get('/admin/manage/{id}/restore', [AdminController::class, 'restore']);
    });
});


