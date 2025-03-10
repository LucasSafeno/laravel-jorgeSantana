<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        // echo "<br>";
        // echo $request->input('nome');
        // echo "<br>";
        // echo $request->input("email");

        $contato = new SiteContato();

        // $contato->name = $request->input("name");
        // $contato->telefone = $request->input("telefone");
        // $contato->email = $request->input("email");
        // $contato->motivo_contato = $request->input("motivo_contato");
        // $contato->mensagem = $request->input("mensagem");

        // $contato->save();

        $contato->fill($request->all());
        $contato->save();

        echo $request->input("nome");
        //print_r($contato->getAttributes());

        return view("site.contato", ['titulo' => 'Contato (Teste)']);
    }
}
