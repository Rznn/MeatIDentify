<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\OauthController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/dashboard', [UserController::class, 'dashboard']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('auth/google', [OauthController::class, 'redirectToProvider'])->name('auth.google');
Route::get('auth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('auth.google.callback');


Route::post('/upload', [UserController::class, 'store'])->name('upload');
Route::get('/result/{id}', [UserController::class, 'show'])->name('result');

