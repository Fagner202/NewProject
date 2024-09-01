<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuaário tem permissão de administrador

        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }
        // Se o usuaário não tiver permissão de administrador, redireciona para a tela de acesso negado
        return redirect('/')->with('error', 'Acesso negado!');
    }
}
