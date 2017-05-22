<?php

namespace App\Http\Controllers;

use App\TrabajadorPortuario;
use App\CuentaBancaria;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CuentaBancariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($CodTrabajadorPortuario)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);

        return view('cuenta.cuenta')->with(compact('portuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($CodTrabajadorPortuario)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);

        return view('cuenta.crear')->with(compact('portuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($CodTrabajadorPortuario, Request $request)
    {
        $this->validate($request, [
            'CodBanco'  =>  'required',
            'NroCuenta' =>  'required',
            'TipoCuenta'=>  'required',
            'Moneda'    =>  'required'
            ]);

        $cuenta = new CuentaBancaria();
        $cuenta->CodBanco   = $request->CodBanco;
        $cuenta->NroCuenta  = $request->NroCuenta;
        $cuenta->TipoCuenta = $request->TipoCuenta;
        $cuenta->Moneda     = $request->Moneda;

        $cuenta->CodTrabajadorPortuario = $CodTrabajadorPortuario;
        $cuenta->UsuarioCreacion = Auth::user()->id;
        $cuenta->FechaCreacion = Carbon::now();
        $cuenta->UsuarioActualizacion = Auth::user()->id;
        $cuenta->FechaActualizacion = Carbon::now();

        if($cuenta->save())
            return response()->json(['msj' => 'Datos registrados Exitosamente'],200);
        else
            return response()->json(['error' => 'no se ejecuto la peticion'] , 501);

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
    public function edit($CodTrabajadorPortuario, $CodCuentaBancaria)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);
        $cuenta = $portuario->cuentas->find($CodCuentaBancaria);

        return view('cuenta.editar')->with(compact('portuario','cuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($CodTrabajadorPortuario, Request $request, $CodCuentaBancaria)
    {
         $this->validate($request, [
            'CodBanco'  =>  'required',
            'NroCuenta' =>  'required',
            'TipoCuenta'=>  'required',
            'Moneda'    =>  'required'
            ]);

        $cuenta = CuentaBancaria::find($CodCuentaBancaria);
        $cuenta->CodBanco   = $request->CodBanco;
        $cuenta->NroCuenta  = $request->NroCuenta;
        $cuenta->TipoCuenta = $request->TipoCuenta;
        $cuenta->Moneda     = $request->Moneda;

        $cuenta->CodTrabajadorPortuario = $CodTrabajadorPortuario;
        $cuenta->UsuarioCreacion = Auth::user()->id;
        $cuenta->FechaCreacion = Carbon::now();
        $cuenta->UsuarioActualizacion = Auth::user()->id;
        $cuenta->FechaActualizacion = Carbon::now();

        if($cuenta->save())
            return response()->json(['msj' => 'Datos registrados Exitosamente'],200);
        else
            return response()->json(['error' => 'no se ejecuto la peticion'] , 501);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($CodTrabajadorPortuario, $CodCuentaBancaria)
    {
        $cuenta = TrabajadorPortuario::find($CodTrabajadorPortuario)->cuentas->find($CodCuentaBancaria);
        $cuenta->delete();
        return back();
    }
}
