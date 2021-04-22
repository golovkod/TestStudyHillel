<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PurchareController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('cart')->group(function () {
    Route::get('/cart-index', [CartController::class, 'index']);
});

Route::prefix('messege')->group(function () {
    Route::get('/messege-index-command', [MessageController::class, 'indexCommandPattern']);
});

Route::prefix('messege')->group(function () {
    Route::get('/messege-index-strategy', [MessageController::class, 'indexStrategyPattern']);
});

Route::prefix('purchase')->group(function () {
    Route::get('/purchase-index', [PurchareController::class, 'index']);
});

