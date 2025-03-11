<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function principal()
    {

        $motivos_contatos = MotivoContato::all();

        //dd($motivos_contatos);

        return view('site.principal', ['motivos_contatos' => $motivos_contatos]);
    }
}
