<?php

use Illuminate\Support\Facades\Route;
use HassanAamir\LaravelFormSdk\Controllers\formController;

// Route::middleware('web')->group(function () {
    Route::get('/form', [formController::class, 'index']);
    Route::post('/form', [formController::class, 'store']);
    Route::put('/form/{id}', [formController::class, 'update']);
    Route::delete('/form/{id}', [formController::class, 'destroy']);
// });
