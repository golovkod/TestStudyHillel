<?php

use App\Http\Controllers\AdaptersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContragentsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PurchareController;
use App\Http\Controllers\WeatherController;
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

Route::prefix('weather')->group(function () {
    Route::get('/weather-index', [WeatherController::class, 'index']);
});

Route::prefix('adapter')->group(function () {
    Route::get('/adapter-index', [AdaptersController::class, 'index']);
});

Route::prefix('contragents')->group(function () {
    Route::get('/find-duplicate', [ContragentsController::class, 'findDuplicate']);
});

Route::prefix('payment')->group(function () {
    Route::get('/paid', [PaymentController::class, 'paid']);
});

Route::prefix('order')->group(function () {
    Route::get('/sum-all-orders', [OrderController::class, 'sumOfAllOrders']);
});

Route::prefix('order')->group(function () {
    Route::get('/findbycontragent', [OrderController::class, 'findOrderByContragent']);
});
