<?php

namespace App\Http\Middleware;

use Closure;

class CheckLabDefined
{
    public function handle($request, Closure $next)
    {
        dd('Middleware executado!');
        // Lógica para verificar se o utilizador tem laboratório definido
        if (!auth()->user()->lab_defined) {
            return redirect()->route('aguarde_definicao');
        }
    }
}

?>