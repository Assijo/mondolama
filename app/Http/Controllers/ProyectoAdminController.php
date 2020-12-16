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
        $proyectos =  DB::select
        (
            "call sp_consultarProyectos()"
        );

     

        return view('administrarProyectos',['proyectos'=>$proyectos]);
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
        return redirect('/administrarproyectos');
        //dd($request);
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
    public function update(Request $request, int $id)
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
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,null,$request->precio,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
            else
            {
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,$request->precio,null,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
            
        }
        elseif($file != null && $file2 == null)
        {
             //obtenemos el nombre del archivo
             $nombre = $file->getClientOriginalName();

             //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));

            $nombre2 = $request->video;

            if($request->id_tipo_proyecto == 3)
            {   
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,null,$request->precio,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
            else
            {
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,$request->precio,null,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
        }

        elseif($file == null && $file2 != null)
        {
            $nombre = $request->logotipo;

             //obtenemos el nombre del archivo
            $nombre2 = $file2->getClientOriginalName();

            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre2,  \File::get($file2));

            if($request->id_tipo_proyecto == 3)
            {   
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,null,$request->precio,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
            else
            {
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,$request->precio,null,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
        }
        else
        {
            $nombre = $request->logotipo;
            $nombre2 = $request->video;

            if($request->id_tipo_proyecto == 3)
            {   
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,null,$request->precio,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
            else
            {
                DB::select
                (
                    "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,$request->precio,null,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
                );
            }
        }
        /*$array[] = array($request->nombre,$request->eslogan,$request->descripcion,$request->precio,$request->fase,$request->ubicacion,$request->id_tipo_proyecto);
        var_dump($array);

        if($request->id_tipo_proyecto == 3)
        {   
            DB::select
            (
                "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,null,$request->precio,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
            );
        }
        else
        {
            DB::select
            (
                "call sp_actualizarProyecto(?,?,?,?,?,?,?,?,?,?,?)", array($request->nombre,$nombre,$request->eslogan,$request->descripcion,$request->precio,null,$request->fase,$nombre2,$request->ubicacion,$id,$request->id_tipo_proyecto)
            );
        }*/
        
        //dd($request);
        
        return redirect('/administrarproyectos');
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
