<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::middleware(['IsNotLogin'])->group(function () {
    Route::get('/', function () {
        return view('landingPage');
    })->name('landingPage');
    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::post('/login/auth', [UserController::class, 'login'])->name('login.auth');
});

Route::middleware(['IsLogin'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [ReportController::class, 'dashboard'])->name('dashboard');

    Route::prefix('/article')->name('article.')->group(function () {
        Route::get('/', [ReportController::class, 'article'])->name('index');
        Route::get('/{id}', [ReportController::class, 'show'])->name('show');
    });

    Route::prefix('/report')->name('report.')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('index');
        Route::get('/create', [ReportController::class, 'create'])->name('create');
        Route::post('/store', [ReportController::class, 'store'])->name('store');
        Route::delete('/destroy/{id}', [ReportController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/comment')->name('comment.')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('index');
        Route::post('/store', [CommentController::class, 'store'])->name('store');
    });
});
