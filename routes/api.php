<?php

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TypeController;
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

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('user', UsersController::class);
    Route::apiResource('home', HomeController::class);
    Route::apiResource('feature', FeatureController::class);
    Route::apiResource('type', TypeController::class);
});

require __DIR__ . '/auth.php';
