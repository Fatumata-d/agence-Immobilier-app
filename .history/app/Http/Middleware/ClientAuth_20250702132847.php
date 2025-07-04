<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('client')) {
            return redirect()->route('connexion'); 
        }

        return $next($request);
    }
}
