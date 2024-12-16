<?php

use App\Http\Middleware\IsGuest;
use App\Http\Middleware\IsHeadStaff;
use App\Http\Middleware\IsLogin;
use App\Http\Middleware\IsNotLogin;
use App\Http\Middleware\IsStaff;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'IsLogin' => IsLogin::class,
            'IsNotLogin' => IsNotLogin::class,
            'IsGuest' => IsGuest::class,
            'IsStaff' => IsStaff::class,
            'IsHeadStaff' => IsHeadStaff::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
