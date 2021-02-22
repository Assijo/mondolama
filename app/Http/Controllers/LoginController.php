<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $login =  DB::select
        (
            'call sp_consultarLoginUsuario(?,?)',array($request->email,$request->pasword)
        );
        if($login != null)
        {
            if($login[0]->id_tipo_persona == 1)
            {
                $sesion = session('sesionAdminMaster');
                return redirect('/index');
            }
            elseif($login[0]->id_tipo_persona == 2)
            {
                $sesion = session('sesionAdmin');
                return redirect('/acercade');
            }
            elseif($login[0]->id_tipo_persona == 3)
            {
                $sesion = session('sesionVendedor');
                return redirect('/acercade');
            }
            elseif($login[0]->id_tipo_persona == 4)
            {
                $sesion = session('sesionCliente');
                return redirect('/politicasprivacidad');
            }
        }
        else
        {
            return redirect('/login');
            
        }
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
    public function destroy()
    {
        if(session()->has('sesionAdminMaster'))
        {
            $request->session()->forget('sesionAdminMaster');
            return redirect('login');
        }
        elseif(session()->has('sesionAdmin'))
        {
            $request->session()->forget('sesionAdmin');
            return redirect('login');
        }
        elseif(session()->has('sesionVendedor'))
        {
            $request->session()->forget('sesionVendedor');
            return redirect('login');
        }
        elseif(session()->has('sesionCliente'))
        {
            $request->session()->forget('sesionCliente');
            return redirect('login');
        }
    }
}
