<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::prefix('api')
    ->group(function () {
        Route::get('/health', [UserController::class, 'healthCheck']);
        Route::get('/users', [UserController::class, 'getAllUsers']);
    });