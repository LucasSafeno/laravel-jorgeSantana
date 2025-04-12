<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view("site.login", ['titulo' => "login"]);
    }

    public function autenticar(Request $request)
    {
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        // mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (email) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        // Recuperando os parametros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');


        // iniciar o model user

        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();
        //$existe = $existe->first();

        if (isset($usuario->name)) {
            echo 'Usuário existe';
        } else {
            echo "Usuário não existe";
        }



    }
}
