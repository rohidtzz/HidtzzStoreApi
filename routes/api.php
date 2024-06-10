<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckLoginApiMiddleware;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'show']);

Route::middleware([CheckLoginApiMiddleware::class])->group(function () {



});



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
