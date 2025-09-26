<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Billing\CustomerController;
use App\Http\Controllers\Billing\ProductPlanController;
use App\Http\Controllers\Billing\SubscriptionVerificationController;
use App\Http\Controllers\Billing\WebhookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/plans', [ProductPlanController::class, 'byProductId']);
Route::get('/verify-subscription', [SubscriptionVerificationController::class, 'verify']);
Route::post('/customers/add', [CustomerController::class, 'store']);
Route::post('/validate-payment/webhook', [WebhookController::class, 'handlePaddleWebhook']);


Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
