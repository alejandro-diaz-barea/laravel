<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ComicController;
use App\Http\Controllers\Api\V1\CommentController;
use App\Http\Controllers\Api\V1\RatingController;
use App\Http\Controllers\Api\V1\CarritoController;
use App\Http\Controllers\Api\V1\PurchaseHistoryController;
use App\Http\Controllers\Api\V1\NewsController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\AuthController;


Route::prefix('v1')->group(function () {
    Route::apiResource('comics', ComicController::class)->middleware('api');
    Route::apiResource('comments', CommentController::class)->middleware('api');
    Route::get('comics/{comic_id}/comments', [CommentController::class, 'getCommentsByComic'])->middleware('api');
    Route::apiResource('ratings', RatingController::class)->middleware('api')->except(['create', 'edit']);
    Route::apiResource('carritos', CarritoController::class)->middleware('api');
    Route::apiResource('purchase-histories', PurchaseHistoryController::class)->middleware('api');
    Route::apiResource('news', NewsController::class)->middleware('api');
    Route::apiResource('users', UserController::class)->middleware('api');

    // Nueva ruta para añadir cómic a un carrito
    Route::post('carritos/{carrito}/comics/{comic}', [CarritoController::class, 'addComic'])->middleware('api');
    Route::get('/carritos/{carrito}/comics', [CarritoController::class, 'getComicsInCart']);
    Route::delete('carritos/{carrito_id}/comics/{comic_id}', [CarritoController::class, 'removeComic'])->middleware('api');

    Route::get('create-random-offers', [ComicController::class, 'createRandomOffers'])->middleware('api');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('me', [AuthController::class, 'me'])->name('me');
});
