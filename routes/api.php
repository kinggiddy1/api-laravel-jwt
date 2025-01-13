<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::post('profile', [AuthController::class, 'profile'])->middleware('auth:api');
Route::get('totalusers', [AuthController::class, 'getTotalUsers'])->middleware('auth:api');
Route::post('userlist', [AuthController::class, 'userlist']);
Route::post('userlist/{id}/', [AuthController::class, 'show']);
Route::post('delete/{id}/', [AuthController::class, 'delete']);

// PRODUCTS
Route::get('products', [ProductController::class, 'index']);
Route::post('store', [ProductController::class, 'store'])->middleware('auth:api');