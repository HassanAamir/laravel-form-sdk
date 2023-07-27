<?php

// namespace YourVendor\YourPackage\Controllers;
namespace HassanAamir\LaravelFormSdk\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use HassanAamir\LaravelFormSdk\Controllers\FormController;

class HelperController extends Controller
{
    public function routes($middleware = [])
    {
        return Route::middleware($middleware)->group(function () {
            Route::get('/outlaw-form', [FormController::class, 'index']);
            Route::post('/outlaw-form', [FormController::class, 'store']);
            Route::get('/outlaw-form/{id}', [FormController::class, 'show']);
            Route::put('/outlaw-form/{id}', [FormController::class, 'update']);
            Route::delete('/outlaw-form/{id}', [FormController::class, 'destroy']);
        });;
    }
}
