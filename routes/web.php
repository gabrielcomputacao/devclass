<?php

use App\Http\Controllers\TesteCreateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste-create', function () {

    return view('testes.create');
});


Route::post('/test-post-create', [TesteCreateController::class, 'store']);
