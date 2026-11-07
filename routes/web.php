
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/contatos', [ContatoController::class, 'index'])
    ->name('admin.contatos.index');

Route::post('/contato', [ContatoController::class, 'enviar']);

Route::delete('/admin/contatos/{contato}', [ContatoController::class, 'destroy'])
    ->name('admin.contatos.destroy');
