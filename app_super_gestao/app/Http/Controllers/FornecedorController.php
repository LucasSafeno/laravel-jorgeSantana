<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00',
                'ddd' => '81',
                'telefone' => '0000000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '00',
                'ddd' => '81',
                'telefone' => '11111'
                
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '00',
                'ddd' => '81',
                'telefone' => '2222'
                
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S',
                'cnpj' => '00',
                'ddd' => '81',
                'telefone' => '33333'
                
            ],


        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
