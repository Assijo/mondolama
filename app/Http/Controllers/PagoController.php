<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                    
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
        DB::select('call sp_insertarRealizarPagoEmpresa(?,?)', array($request->idpersona,$request->monto));

        $empleado =  DB::select("call sp_consultarEmpleado($request->idpersona)");
        $persona = $empleado[0]->nombre." ";
        $persona .= $empleado[0]->ap_paterno." ";
        $persona .= $empleado[0]->ap_materno;

        $paypal_business = "sb-mlflq4454368@personal.example.com";
        $paypal_currency = "MXN";
        $paypal_cursymbol = "&mxn";
        $paypal_location = "MX";
        $paypal_returnurl = "http://mondolama.test/empleados";
        $paypal_returntxt = "Pago Realizado Exitosamente!";
        $paypal_cancelurl = "http://mondolama.test/empleados";

        $ppurl = "https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_cart";
        $ppurl .= "&business=".$paypal_business;
        $ppurl .= "&no_note=1";
        $ppurl .= "&currency_code=".$paypal_currency;
        $ppurl .= "&charset=utf-8&rm=1&upload=1";
        $ppurl .= "&business=".$paypal_business;
        $ppurl .= "&return=".urlencode($paypal_returnurl);
        $ppurl .= "&cancel_return=".urlencode($paypal_cancelurl);
        $ppurl .="&item_name_1="."$persona"."&quantity_1=$request->monto&amount_1="."1"."&item_number_1=";
        $ppurl .= "&tax_cart=0.00";

        return redirect ($ppurl);
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
