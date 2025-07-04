<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('client')) {
            return redirect()->route('connexion'); // Redirige vers la page de connexion
        }

        return $next($request);
    }
}
