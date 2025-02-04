<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TesteCreateController;
use App\Http\Controllers\TesteMessagesController;
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

Route::get('/message-form', [TesteMessagesController::class, 'create']);
Route::post('/message-view', [TesteMessagesController::class, 'store']);
