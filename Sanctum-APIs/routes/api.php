<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//protected routes
Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('/products', [ProductController::class, 'index']);
    
    Route::post('/products', [ProductController::class, 'store']);
    
    Route::get('/products/{id}', [ProductController::class, 'show']);
    
    Route::put('/products/{id}', [ProductController::class, 'update']);
    
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    
    Route::get('/products/search/{name}', [ProductController::class, 'search']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


