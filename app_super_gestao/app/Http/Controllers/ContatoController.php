<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        $motivos_contatos = MotivoContato::all();



        return view("site.contato", ['titulo' => 'Contato (Teste)', 'motivos_contatos' => $motivos_contatos]);
    }

    public function salvar(Request $request)
    {
        // realizar validação dos dados do formulário
        $request->validate([
            'name' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);


        //SiteContato::create($request->all());
    }
}
