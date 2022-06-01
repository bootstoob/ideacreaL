<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Usuario;

class Administracion
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
        $email = $request->input('email');
        if ($email !== "sam501@examaple.org") {
            echo "¡No tienes email para panel de administración! le diremos a tus padres.";
        }
        /*
        if (Usuario::getUser() &&  Usuario::getUser()->email == "sam50@examaple.org") {
            return $next($request);
        }
        */
        //if (Authenticate::getAllUsers() &&  Authenticate::getAllUsers()->email ) {
        //    return $next($request);
        //}
        return $next($request);
    }
}
