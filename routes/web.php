<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {});
Route::get('/contact', [ContactController::class, 'get']);
Route::get('/produtos/{busca?}', [ProductsController::class, 'getProducts']);
Route::get('/produto/{id?}', [ProductsController::class, 'getProduct']);
