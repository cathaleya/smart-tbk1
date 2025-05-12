<?php

use App\Http\Middleware\Authentication;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => Authentication::class,
            'isAdmin' => App\Http\Middleware\isAdmin::class,
            'kontrolPengguna' => App\Http\Middleware\KontrolPengguna::class,
            'TransactionMiddleware' => App\Http\Middleware\TransactionMiddleware::class,
            'warehouse' => App\Http\Middleware\Warehouse::class,
            'transport' => App\Http\Middleware\Transport::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
