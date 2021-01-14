<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $login =  DB::select
        (
            'call sp_consultarLoginUsuario(?,?)',array($request->email,$request->pasword)
        );
        if($login != null)
        {
            if($login[0]->id_tipo_persona == 1 || $login[0]->id_tipo_persona == 2)
            {
                return redirect('/administrarproyectos');
                //echo($login[0]->id_tipo_persona);
            }
            elseif($login[0]->id_tipo_persona == 3)
            {
                return redirect('/pagosaprobar');
            }
            elseif($login[0]->id_tipo_persona == 4)
            {
                return redirect('/pagarproyecto');
            }
        }
        else
        {
            return redirect('/login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        /*
         aqui crear una variable de sesion que combine el usuario y
          contraseña
         y redireccionar a la pagina principal dependiendo del usuario y la sesion que se almaceno
          */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
