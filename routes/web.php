<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/contact', [ContactController::class, 'get']);

