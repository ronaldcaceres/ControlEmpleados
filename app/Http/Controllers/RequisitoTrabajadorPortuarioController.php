<?php

namespace App\Http\Controllers;

use App\RequisitoTrabajadorPortuario;
use App\TrabajadorPortuario;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RequisitoTrabajadorPortuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($CodTrabajadorPortuario)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);

        return view('requisito.requisito')->with(compact('portuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($CodTrabajadorPortuario)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajadorPortuario);
        return view('requisito.crear')->with(compact('portuario'));
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
            'CodRequisito'  => 'required',
            'FechaInicio'   => 'required',
            'FechaFin'      => 'required',
            'Observacion'   => 'required'
        ]);

        $requisito = new RequisitoTrabajadorPortuario();
        $requisito->CodRequisito = $request->CodRequisito;
        $requisito->FechaInicio = $request->FechaInicio;
        $requisito->FechaFin = $request->FechaFin;
        $requisito->Observacion = $request->Observacion;

        $requisito->CodTrabajadorPortuario = $CodTrabajadorPortuario;
        $requisito->UsuarioCreacion = Auth::user()->id;
        $requisito->FechaCreacion = Carbon::now();
        $requisito->UsuarioActualizacion = Auth::user()->id;
        $requisito->FechaActualizacion = Carbon::now();

        $requisito->save();
        return redirect('portuario');
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
    public function destroy($CodTrabajadorPortuario, $CodRequisitoTrabajadorPortuario)
    {
        $requisito = TrabajadorPortuario::find($CodTrabajadorPortuario)->requisitos->find($CodRequisitoTrabajadorPortuario);
        $requisito->delete();
        return back();
    }
}
