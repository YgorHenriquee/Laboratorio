<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfLabDefined
{
    public function handle($request, Closure $next)
    {
        // Lógica para verificar se o utilizador já tem laboratório definido
        if (auth()->user()->lab_defined) {
            return redirect()->route('laboratorio', ['lab' => auth()->user()->lab]);
        }

        return $next($request);
    }
}

?>