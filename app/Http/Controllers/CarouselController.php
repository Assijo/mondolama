<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel =  DB::select
        (
            "call sp_consultarCarousel()"
        );

        return view('administrarCarouselBanner',['carousel'=>$carousel]);
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
        $file = $request->file('imagen');
        
        $nombre = $file->getClientOriginalName();

        \Storage::disk('local')->put($nombre,  \File::get($file));

        DB::select("call sp_insertarCarousel(?,?,?)", array($nombre,$request->titulo,$request->subtitulo));

        return redirect('/administrarcarouselbanner');
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
    public function edit(int $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $file = $request->file('imagen');

        if($file == null)
        {
            $carousel = DB::select("call sp_consultarCarouselEspecifico($request->idcarousel)");
            $request->imagen = $carousel[0]->imagen;
        }
        else
        {
            $request->imagen = $file->getClientOriginalName();

            \Storage::disk('local')->put($request->imagen,  \File::get($file));
        }      

        DB::select("call sp_actualizarCarousel(?,?,?,?)", array($request->imagen,$request->titulo,$request->subtitulo,$request->idcarousel));

        return redirect('/administrarcarouselbanner');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $carousel =  DB::select
        (
            "call sp_eliminarCarousel($request->idbanner)"
        );

        return redirect('/administrarcarouselbanner');
    }
}
