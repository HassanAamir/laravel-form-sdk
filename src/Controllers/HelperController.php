<?php

// namespace YourVendor\YourPackage\Controllers;
namespace HassanAamir\LaravelFormSdk\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use HassanAamir\LaravelFormSdk\Controllers\FormController;

class HelperController extends Controller
{
    public function routs($middleware)
    {
        return Route::middleware($middleware)->group(function () {
            Route::get('/your-package', [FormController::class, 'index']);
            Route::post('/your-package', [FormController::class, 'store']);
            Route::get('/your-package/{id}', [FormController::class, 'show']);
            Route::put('/your-package/{id}', [FormController::class, 'update']);
            Route::delete('/your-package/{id}', [FormController::class, 'destroy']);
        });;
    }
}
