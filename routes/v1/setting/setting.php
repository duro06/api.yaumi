<?php

use App\Http\Controllers\Setting\InfoTokoController;
use App\Http\Controllers\Setting\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/setting/logo', [InfoTokoController::class, 'getLogo']);
Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'setting/info'
], function () {
    Route::get('/info-toko', [InfoTokoController::class, 'index']);
    Route::post('/store', [InfoTokoController::class, 'store']);
    Route::post('/logo', [InfoTokoController::class, 'logo']);
});
Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'setting/menu'
], function () {
    Route::get('/index', [MenuController::class, 'getMenu']);
    Route::post('/store', [MenuController::class, 'store']);
    Route::post('/logo', [MenuController::class, 'logo']);
});
