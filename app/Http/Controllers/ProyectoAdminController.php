<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProyectoAdminController extends Controller
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
        return view('administrarProyectos',['fotos'=>$resultados,'proyectos'=>$proyectos]);

        //return view('administrarProyectos',['proyectos'=>$proyectos]);
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
        $file = $request->file('logotipo');
        $file2 = $request->file('video');
        if($file != null && $file2 != null)
        {
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
            $nombre2 = $file2->getClientOriginalName();
            
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));
            \Storage::disk('local')->put($nombre2,  \File::get($file2));
            

            if($request->id_tipo_proyecto == 3)
            {
                DB::select
                (
                    'call sp_insertarAgregarProyecto(?,?,?,?,?,?,?,?,?,?)',array($request->nombre,$nombre,$request->eslogan,$request->descripcion,null,$request->fase,$nombre2,$request->ubicacion,$request->id_tipo_proyecto,$request->precio)
                );
            }
            else
            {
                DB::select
                (
                    'call sp_insertarAgregarProyecto(?,?,?,?,?,?,?,?,?,?)',array($request->nombre,$nombre,$request->eslogan,$request->descripcion,$request->precio,$request->fase,$nombre2,$request->ubicacion,$request->id_tipo_proyecto,null)
                ); 
            }
        }
        
        
        //dd($request->id);

        $foto = $request->file('foto');
        
        if($foto != null)
        {
            
            foreach($foto as $f)
            {
                 //obtenemos el nombre del archivo
                $nombre = $f->getClientOriginalName();
                //dd($f);
                //indicamos que queremos guardar un nuevo archivo en el disco local
                \Storage::disk('local')->put($nombre,  \File::get($f));

                DB::select
                (
                    'call sp_insertarFoto(?,?)',array($nombre,$request->id)
                );
            }
        }
        

        return redirect('/administrarproyectos');

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
    public function update(Request $request)
    {
       dd($request);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        foreach($request as $request)
        {
            DB::select
            (
                "call sp_eliminarFoto($request->foto)"
            );
        }
        
            
        return redirect('/administrarproyectos');
        //dd($request->foto);
    }
}
