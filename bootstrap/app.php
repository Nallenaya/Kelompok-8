<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php', // Menghubungkan file api.php Anda
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Mendaftarkan alias middleware dari Kernel lama Anda
        $middleware->alias([
            'ceklevel' => \App\Http\Middleware\CekLevel::class,
        ]);

        // Laravel 11/12 sudah menyertakan middleware standar secara otomatis.
        // Anda tidak perlu lagi mendaftarkan ValidatePostSize, TrimStrings, dll.
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();