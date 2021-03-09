<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$usuarios =  DB::select(
            "call sp_consultarUsuarios()"
      );
    //dd($lotes);
      
    return view('usuarios',['usuarios'=>$usuarios]);*/

        $usuario = DB::select("call sp_consultarUsuarioAdminMaster()");

        return view('/verPerfil', ['usuario'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::select("call sp_consultarClientes()");

        return view('/clientes', ['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select('call sp_insertarUsuario(?,?,?,?,?,?,?,?)',array($request->nombre,$request->ap_paterno,$request->ap_materno,$request->fecha_nacimiento,$request->telefono,$request->correo,$request->contrasena,$request->id_tipo_usuario)); 
        
        if($request->id_tipo_usuario==1)
        {
            session()->flush();
            session(['sesionAdminMaster' => 'sesionAdminMaster']);
            return redirect('/administrarproyectos');
        }
        elseif ($request->id_tipo_usuario==2)
        {
            session()->flush();
            session(['sesionAdmin' => 'sesionAdmin']);
            return redirect('/administrarproyectos');
        }
        elseif ($request->id_tipo_usuario==3)
        {
            session()->flush();
            session(['sesionVendedor' => 'sesionVendedor']);
            return redirect('/index');
        }
        else
        {
            session()->flush();
            session(['sesionCliente' => 'sesionCliente']);
            return redirect('/administrarproyectos'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
       // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*DB::select
        (
            "call sp_actualizarUsuario(?,?,?,?,?,?,?,?)", array($request->nombre,$request->ap_paterno,$request->ap_materno,$request->fecha_nacimiento,$request->telefono,$request->correo,$request->contrasena,$id)
        );
        //dd($request);
        
        return redirect('/usuarios');*/

        DB::select
        (
            "call sp_actualizarUsuarioAdminMaster(?,?,?,?,?,?,?)", array($request->nombre,$request->ap_pat,$request->ap_mat,$request->fecha_nac,$request->telefono,$request->correo,$request->contrasena)
        );

        return redirect('/verperfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        //
    }
}
