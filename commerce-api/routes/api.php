<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\ProductController;
use \App\Http\Controllers\Api\V1\OrderController;
use \App\Http\Controllers\Api\V1\ProductOrderController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}',[ProductController::class, 'show']);
Route::post('/products/new', [ProductController::class, 'store']);
Route::put('/products/update/{id}', [ProductController::class, 'update']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{id}',[OrderController::class, 'show']);
Route::post('/orders/new', [OrderController::class, 'store']);
Route::put('/orders/update/{id}', [OrderController::class, 'update']);

Route::get('/productOrders', [ProductOrderController::class, 'index']);
Route::get('/productOrders/{id}',[ProductOrderController::class, 'show']);
Route::post('/productOrders/new', [ProductOrderController::class, 'store']);
Route::put('/productOrders/update/{id}', [ProductOrderController::class, 'update']);