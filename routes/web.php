<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

// Rotas públicas de autenticação
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

// Formulário público
Route::post('/contato', [ContatoController::class, 'enviar']);

// Rotas protegidas
Route::middleware('auth')->group(function () {

    Route::get('/admin/contatos', [ContatoController::class, 'index'])
        ->name('admin.contatos.index');

    Route::delete('/admin/contatos/{contato}', [ContatoController::class, 'destroy'])
        ->name('admin.contatos.destroy');

    Route::patch(
        '/admin/contatos/{contato}/lida',
        [ContatoController::class, 'marcarComoLida']
    )->name('admin.contatos.lida');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
