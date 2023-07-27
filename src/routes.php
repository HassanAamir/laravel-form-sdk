<?php

use Illuminate\Support\Facades\Route;
use HassanAamir\LaravelFormSdk\Controllers\formController;

Route::middleware('api')->group(function () {
    Route::get('/your-package', [formController::class, 'index'])->name('your-package.index');
    Route::post('/your-package', [formController::class, 'store'])->name('your-package.store');
    Route::get('/your-package/{id}', [formController::class, 'show'])->name('your-package.show');
    Route::put('/your-package/{id}', [formController::class, 'update'])->name('your-package.update');
    Route::delete('/your-package/{id}', [formController::class, 'destroy'])->name('your-package.destroy');
});