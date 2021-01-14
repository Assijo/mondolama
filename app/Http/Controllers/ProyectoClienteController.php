<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProyectoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = collect([]);

        $proyectos =  DB::select
        (
            "call sp_consultarProyectos()"
        );

        foreach($proyectos as $p)
        {
            $fotos =  DB::select
            (
                "call sp_consultarFotos($p->id_proyecto)"
            );

            $resultados->offsetSet($p->id_proyecto, $fotos);
            
        }  

        //dd($resultados);
        return view('index',['fotos'=>$resultados,'proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $proyectos =  DB::select
        (
            "call sp_consultarProyecto($id)"
        );

        //dd($proyectos);

        $idproyecto = $proyectos[0]->id_proyecto;

        $fotos =  DB::select
        (
            "call sp_consultarFotos($idproyecto)"
        );
    
        return view('vistaProyecto',['fotos'=>$fotos, 'proyectos'=>$proyectos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(int $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prueba $prueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::select
        (
            "call sp_eliminarProyecto($request->idproyecto)"
        );

        return redirect('/administrarproyectos');
    }
}
