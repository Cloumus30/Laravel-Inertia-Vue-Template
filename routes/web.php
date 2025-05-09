<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);
Route::prefix('project')->group(function(){
    Route::get('/list', [LandingController::class, 'indexProjects']);
    Route::get('/detail/{id}', [LandingController::class, 'detailProject']);
});

Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginStore']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'index']);

    Route::prefix('project')->group(function(){
        Route::get('/', [ProjectController::class, 'index']);
    });
});

Route::post('/api/project/add', [ProjectController::class, 'store']);
