<?php

namespace App\Http\Middleware;

use Closure;

class UserAdministradores
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //*Comprobacion de la existencia de una sesion de usuario en el sistema*//
        if(!session()->has('sesionAdminMaster') && !session()->has('sesionAdmin'))
        {
            return redirect('/login');
        }
        return $next($request);        
    }
}