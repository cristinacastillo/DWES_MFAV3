<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     * Establecer una pagina principal para cada tipo de usuario
     * 
     * Si el usuario esta logueado y accede auna seccion que no requiere 
     * estar logueado, lo redirigue a la pagina apropiada segun su perfil
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if the user is logged in
        if (Auth::guard($guard)->check()) :

            return redirect()->route(Auth::user()->route());

            /*// si es administrador lo rediriguimos a su seccion
            if(Auth::user()->isAdmin()):

                return redirect()->route('admin');
            else:
           // si es un usuario normal lo rediriguimos a la vista principal
            //return redirect(RouteServiceProvider::HOME);
                return redirect()->route('dogs.list');
            endif;*/

        endif;

        return $next($request);
    }
}
