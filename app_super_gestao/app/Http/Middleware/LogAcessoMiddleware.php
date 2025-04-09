<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\LogAcesso;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // $request - menipular
        //return $next($request);
        //dd($request);

        $ip = $request->server->get("REMOTE_ADDR");
        $rota = $request->getRequestUri();

        LogAcesso::create(['log' => "$ip XYZ Requisitou a rota  $rota"]);

        //return $next($request);

        //return Response('Rodou no drone gatinha');

        $resposta = $next($request);

        $resposta->setStatusCode(201, 'O status da resposta e o texto da resposta foram modificados');


        return $resposta;
    }
}
