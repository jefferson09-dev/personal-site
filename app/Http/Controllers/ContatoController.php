<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        return $request->input('nome') . ', sua mensagem foi recebida com sucesso!';
        // dd($request->all());
    }
}
  