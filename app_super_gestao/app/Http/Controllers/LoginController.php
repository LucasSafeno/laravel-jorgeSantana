<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        $error = '';

        if ($request->get('error') == 1) {
            $error = 'Usuário e ou senha não existe';
        }

        if ($request->get('error') == 2) {
            $error = 'Necessário realizar login apra acessar a página';
        }


        return view("site.login", ['titulo' => "login", 'error' => $error]);
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
        //$usuario = $usuario->first();

        if (isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['error' => 1]);
        }

    }


    public function sair()
    {
        echo 'sair';
    }
}
