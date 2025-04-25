<?php

use App\Http\Controllers\Dashboard\ProjectController;
use Illuminate\Support\Facades\Route;


Route::post('project/add', [ProjectController::class, 'store']);
