<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TesteCreateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste-create', function () {

    return view('testes.create');
});


Route::post('/test-post-create', [TesteCreateController::class, 'store']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/animal', [AnimalController::class, 'index']);
