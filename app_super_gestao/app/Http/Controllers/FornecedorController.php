<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {


        $fornecedores = Fornecedor::with(['produtos'])->where('nome', 'like', '%' . $request->input('nome') . '%')
            ->where('site', 'like', '%' . $request->input('site') . '%')
            ->where('uf', 'like', '%' . $request->input('uf') . '%')
            ->where('email', 'like', '%' . $request->input('email') . '%')
            ->paginate(5);




        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request)
    {
        $msg = '';


        if ($request->input('_token') != '' && $request->input('id') == '') {
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


        // edição
        if ($request->input('_token') != '' && $request->input('id') != '') {
            $fornecedor = Fornecedor::find($request->input('id'));

            $update = $fornecedor->update($request->all());
            if ($update) {
                $msg = 'Atualização  realizado com suceso';
            } else {
                $msg = 'Erro ao tentar realizar registro';
            }

            return redirect()->route('app.fornecedores.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }



        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    } // adicionar


    public function editar($id, $msg = '')
    {
        $fornecedor = Fornecedor::find($id);


        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    } // editar

    public function excluir($id)
    {
        Fornecedor::find($id)->delete();
        return redirect()->route('app.fornecedores');
    }
}
