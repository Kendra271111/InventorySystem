<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;   
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;

Orion::resource('barang', ProductController::class);
Orion::resource('user', UserController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
