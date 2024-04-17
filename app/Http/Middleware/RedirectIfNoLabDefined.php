<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNoLabDefined
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->lab) {
            return $next($request);
        }
    
        return redirect()->route('aguarde_definicao');
    }
}
