<?php

use App\Http\Controllers\Setting\InfoTokoController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'setting/info'
], function () {
    Route::get('/info-toko', [InfoTokoController::class, 'index']);
    Route::post('/store', [InfoTokoController::class, 'store']);
});
