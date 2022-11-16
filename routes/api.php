<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', [\App\Http\Controllers\TagController::class, 'index']);
    Route::get('/{tag}', [\App\Http\Controllers\TagController::class, 'show']);
    Route::post('/', [\App\Http\Controllers\TagController::class, 'store']);
    Route::patch('/{tag}', [\App\Http\Controllers\TagController::class, 'update']);
    Route::delete('/{tag}', [\App\Http\Controllers\TagController::class, 'destroy']);
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('/{category}', [\App\Http\Controllers\CategoryController::class, 'show']);
    Route::post('/', [\App\Http\Controllers\CategoryController::class, 'store']);
    Route::patch('/{category}', [\App\Http\Controllers\CategoryController::class, 'update']);
    Route::delete('/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy']);
});

Route::group(['prefix' => 'articles'], function () {
    Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index']);
    Route::get('/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);
    Route::post('/', [\App\Http\Controllers\ArticleController::class, 'store']);
    Route::patch('/{article}', [\App\Http\Controllers\ArticleController::class, 'update']);
    Route::delete('/{article}', [\App\Http\Controllers\ArticleController::class, 'destroy']);
});
