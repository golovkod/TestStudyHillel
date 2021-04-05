<?php

use App\Http\Controllers\ContragentsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
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
