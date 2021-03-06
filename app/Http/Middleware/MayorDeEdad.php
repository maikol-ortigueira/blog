<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MayorDeEdad
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $edad = (int) $request->edad;

        if (!isset($edad) || !$edad) {
            return redirect('pedir-edad');
        }
        
        if ($edad < 18) {
            return redirect(route('no-autorizado'));
        }
        
        return $next($request);
    }
}
