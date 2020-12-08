<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistredUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $usuariounico = DB::selectOne('select * from persona where  correo= ?',
        [$request->email]); //se consulta si el usuario esta en la base de datos
        if($usuariounico==null)  // si no esta redirecciona al index aqui poner una alerta
        {
            return redirect('/login');
        }
        else // sino continua a el controlador
        {

        }
        return $next($request);
    }
}
