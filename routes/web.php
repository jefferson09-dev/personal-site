<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('home');
});

Route::post('/contato', [ContatoController::class, 'enviar']);  
