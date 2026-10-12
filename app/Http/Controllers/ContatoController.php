<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|string|min:3|max:100',
                'email' => 'required|email',
                'mensagem' => 'required|string|min:5|max:2000',
            ],
            [],
            [],
        );

        return redirect('/#contato')
            ->with('sucesso', 'Sua mensagem foi recebida com sucesso!');
    }
}
