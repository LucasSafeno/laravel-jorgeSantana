<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {


        return view("site.contato", ['titulo' => 'Contato (Teste)']);
    }

    public function salvar(Request $request)
    {
        // realizar validação dos dados do formulário
        $request->validate([
            'name' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        //SiteContato::create($request->all());
    }
}
