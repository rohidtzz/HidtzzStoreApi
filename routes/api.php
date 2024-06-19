<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckLoginApiMiddleware;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\CartController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::get('/product', [ProductController::class, 'index']);

Route::get('/category/product/{slug}', [ProductCategoryController::class, 'index']);

Route::get('/product/{slug}', [ProductController::class, 'show']);

Route::middleware([CheckLoginApiMiddleware::class])->group(function () {

    Route::get('/user', [AuthController::class, 'user']);

    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart', [CartController::class, 'store']);

});



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
