<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ComicController;


Route::prefix('v1')->group(function () {
    Route::apiResource('comics', ComicController::class)->middleware('api');
});

Route::apiResource('v1/users', App\Http\Controllers\Api\V1\UserController::class)->middleware('api');

Route::apiResource('v1/comments', App\Http\Controllers\Api\V1\CommentController::class)->middleware('api');

Route::apiResource('v1/ratings', App\Http\Controllers\Api\V1\RatingController::class)->middleware('api')->except(['create', 'edit']); // Agregar except para evitar duplicados

Route::apiResource('v1/carritos', App\Http\Controllers\Api\V1\CarritoController::class)->middleware('api');

Route::apiResource('v1/purchase-histories', App\Http\Controllers\Api\V1\PurchaseHistoryController::class)->middleware('api');

Route::apiResource('v1/news', App\Http\Controllers\Api\V1\NewsController::class)->middleware('api');



Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/auth'
    ], function ($router) {
    Route::post('login', [\App\Http\Controllers\Api\V1\AuthController::class,
    
    'login'])->name('login');
    
    Route::post('logout', [\App\Http\Controllers\Api\V1\AuthController::class,
    
    'logout'])->name('logout');
    
    Route::post('refresh', [\App\Http\Controllers\Api\V1\AuthController::class,
    
    'refresh'])->name('refresh');
    
    Route::post('me', [\App\Http\Controllers\Api\V1\AuthController::class,
    
    'me'])->name('me');
    
    });