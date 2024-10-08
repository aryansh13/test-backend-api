<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxCalculationController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OjolRevenueShareController;


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

//Tax Calculation
Route::get('/calculate-tax', [TaxCalculationController::class, 'calculateGet']);
Route::post('/calculate-tax', [TaxCalculationController::class, 'calculatePost']);

//Discount Calculation
Route::post('/calculate-discount', [DiscountController::class, 'calculateDiscount']);

//Ojol Revenue Share
Route::post('/calculate-ojol-share', [OjolRevenueShareController::class, 'calculateShare']);
