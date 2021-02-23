<?php

namespace App\Http\Middleware;

use Closure;

class UserAdminMaster
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
        $response = $next($request);
        //*Comprobacion de la existencia de una sesion de usuario en el sistema*//
        if(!session()->has('sesionAdminMaster'))
        {
            return redirect('/login');
        }
        return $response;
    }
}