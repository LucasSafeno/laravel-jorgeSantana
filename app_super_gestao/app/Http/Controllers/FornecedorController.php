<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar()
    {
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request)
    {
        $msg = '';


        if ($request->input('_token') != '') {
            //  validação
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required:min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo  :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no minimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no minimo 40 caracteres',
                'uf.min' => 'O campo UF deve ter no minimo 2 cacaracteres',
                'uf.max' => 'O campo UF deve ter no máximo 2 cacaracteres',
                'email.email' => 'O campo email não foi preenchido corretamente'
            ];


            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            // redirect

            //dados para view

            $msg = 'Cadastro realizado com sucesso.';
        }



        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }
}
