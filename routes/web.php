<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [UserController::class, 'showLogin'])->name('showLogin');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login/auth', [UserController::class, 'login'])->name('login.auth');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::prefix('/report')->name('report.')->group(function () {
    Route::get('/show', [ReportController::class, 'index'])->name('show');
    Route::get('/create', [ReportController::class, 'create'])->name('create');
    Route::post('/store', [ReportController::class, 'store'])->name('store');
});
