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

Route::get('/error-permission', function () {
    return view('errors.permission');
})->name('error.permission');

Route::middleware(['IsLogin', 'IsGuest'])->group(function () {

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [ReportController::class, 'dashboard'])->name('dashboard');
 
    Route::prefix('/report')->name('report.')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('index');
        Route::get('/create', [ReportController::class, 'create'])->name('create');
        Route::post('/store', [ReportController::class, 'store'])->name('store');
        Route::get('/article', [ReportController::class, 'article'])->name('article');
        Route::get('/{id}', [ReportController::class, 'show'])->name('show');
        Route::delete('/destroy/{id}', [ReportController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/comment')->name('comment.')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('index');
        Route::post('/store', [CommentController::class, 'store'])->name('store');
    });
});
