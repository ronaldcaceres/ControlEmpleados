<?php

namespace App\Http\Controllers;

use App\Dependiente;
use App\TrabajadorPortuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DependienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($CodTrabajadorPortuario)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);
        return view('dependiente.dependiente',compact('portuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($CodTrabajadorPortuario)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);
        return view('dependiente.crear',compact('portuario'));
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
            'NombreCompleto'        =>  'required',
            'TipoDependiente'       =>  'required',
            'FechaNacimiento'       =>  'required'
        ]);

        $dependiente = new Dependiente();
        $dependiente->NombreCompleto = $request->NombreCompleto;
        $dependiente->TipoDependiente = $request->TipoDependiente;
        $dependiente->CodTrabajadorPortuario = $CodTrabajadorPortuario;
        $dependiente->FechaNacimiento = (new Carbon($request->FechaNacimiento))->toDateTimeString();
        $dependiente->UsuarioCreacion = Auth::user()->id;
        $dependiente->FechaCreacion = Carbon::now();
        $dependiente->UsuarioActualizacion = Auth::user()->id;
        $dependiente->FechaActualizacion = Carbon::now();

        $dependiente->save();
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
