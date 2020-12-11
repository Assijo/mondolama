<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class LoteEstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $proyectos =  DB::select(
            "call sp_consultarProyecto($id)"
      );
    //dd($proyectos);
      
    return view('administrarLotesManzanas',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $manzanas =  DB::select(
            "call sp_consultarManzanas($id)"
      );
    //dd($manzanas);
      
    return view('administrarLotesManzanas',['manzanas'=>$manzanas]);
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
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        //
    }
}
