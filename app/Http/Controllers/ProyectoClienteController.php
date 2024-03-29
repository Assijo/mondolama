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
        //$resultados = collect([]);

        $proyectos =  DB::select
        (
            "call sp_consultarProyectos()"
        );

        $carousel =  DB::select
        (
            "call sp_consultarCarousel()"
        );

        
        

        //dd($resultados);
        return view('index',compact(['carousel','proyectos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos =  DB::select
        (
            "call sp_consultarProyectos()"
        );

        return view('pagarProyecto','proyectos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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

        $banner =  DB::select
        (
            "call sp_consultarBanner()"
        );
    
        return view('vistaProyecto',compact(['banner','fotos','proyectos']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update()
    {
        $proyectos =  DB::select
        (
            "call sp_consultarProyectos()"
        );

        return view('elegirProyecto',['proyectos'=>$proyectos]);
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
