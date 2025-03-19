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

        $regras = [
            'name' => 'required|min:3|max:20|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedbacks = [
            'nome.max' => 'O nome não pode ultrapassar 20 caracteres',
            'name.unique' => 'Já existe esse nome no banco de dados',
            'email.email' => 'Email inválido',
            'mensagem.max' => 'A mensagem não pode ultrapassar 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedbacks);


        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
