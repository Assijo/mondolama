<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados =  DB::select(
            "call sp_consultarEmpleados()"
      );

     

        return view('empleados',['empleados'=>$empleados]);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $persona = $request->radio;

        return view('pagar',['persona'=>$persona]);
        //dd($persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
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
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        //
    }
}
