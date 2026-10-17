<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nome' => 'required|string|min:3|max:100',
                'email' => 'required|email',
                'mensagem' => 'required|string|min:5|max:2000',
            ],
            [
                'nome.required' => 'O nome é obrigatório.',
                'nome.min' => 'O nome deve ter pelo menos :min caracteres.',
                'nome.max' => 'O nome deve ter no máximo :max caracteres.',
                'email.required' => 'O e-mail é obrigatório.',
                'email.email' => 'Digite um e-mail válido.',
                'mensagem.required' => 'A mensagem é obrigatória.',
                'mensagem.min' => 'A mensagem deve ter pelo menos :min caracteres.',
                'mensagem.max' => 'A mensagem deve ter no máximo :max caracteres.',
            ]
        );

        if ($validator->fails()) {
            return redirect('/#contato')
                ->withErrors($validator)
                ->withInput();
        }

        return redirect('/#contato')
            ->with('sucesso', 'Sua mensagem foi recebida com sucesso!');
    }
}
