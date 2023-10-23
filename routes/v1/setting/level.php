<?php

use App\Http\Controllers\Setting\LevelController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'setting/level'
], function () {
    Route::get('/index', [LevelController::class, 'index']);
    Route::post('/store', [LevelController::class, 'store']);
    Route::post('/destroy', [LevelController::class, 'destroy']);
});
