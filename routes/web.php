<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('home')->middleware(EnsureUserIsAuthenticated::class);
