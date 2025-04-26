<?php

use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        api:__DIR__.'/../routes/api.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //)
        $middleware->api(remove:[
            VerifyCsrfToken::class,
        ]);
        $middleware->web(append:[
            HandleInertiaRequests::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->respond(function (Response $response, Throwable $exception, Request $request) {
            // 404 Http Status
            if($response->getStatusCode() == 404){
                return Inertia::render('ErrorPage', ['status' => $response->getStatusCode()])
                    ->toResponse($request)
                    ->setStatusCode($response->getStatusCode());
            }
            // 419, 500, 503, 403 Status ONly in Production
            if (!app()->environment(['local', 'testing']) && in_array($response->getStatusCode(), [419, 500, 503, 403])) {
                return Inertia::render('ErrorPage', 
                    [
                        'status' => $response->getStatusCode(),
                    ])
                    ->toResponse($request)
                    ->setStatusCode($response->getStatusCode());
            }
    
            return $response;
        });
    })->create();
