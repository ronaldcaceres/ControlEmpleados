<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\trabajadorPortuario;
use Illuminate\Support\Facades\Auth;

class TrabajadorPortuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portuarios = trabajadorPortuario::all();
        return view('trabajadorPortuario.portuario', compact('portuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajadorPortuario.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ApellidoPaterno'	        =>	'required',
            'ApellidoMaterno'	        =>	'required',
            'Nombre'			        =>	'required',
            'Tax'				        =>	'required',
            'ClaseBrevete'		        =>  '',
            'EstadoCivil'		        =>	'',
            'FechaNacimiento'	        =>	'',
            'FechaRevalidacionBrevete'	=>	'',
            'NroCelular'		        => '',
            'TipoDocIdentidad'	        => '',
            'NroDocIdentidad'	        => '',
            'NroLicenciaBrevete'        => '',
            'TelefonoAdicional1'        => '',
            'TelefonoAdicional2'        => '',
            'Sexo'				        => '',
            'TipoRegimenPensionar'      => '',
            'IndicadorTieneBrevete'     => '',
        ]);

        $portuario = new TrabajadorPortuario();
        $portuario->ApellidoPaterno = $request->ApellidoPaterno;
        $portuario->ApellidoMaterno = $request->ApellidoMaterno;
        $portuario->Nombre          = $request->Nombre;
        $portuario->Tax             = $request->Tax;
        $portuario->EstadoCivil     = $request->EstadoCivil;
        $portuario->Tax             = $request->Tax;
        $portuario->TipoRegimenPensionar = $request->TipoRegimenPensionar;
        $portuario->NroCelular      = $request->NroCelular;
        $portuario->TelefonoAdicional1 = $request->TelefonoAdicional1;
        $portuario->TelefonoAdicional2 = $request->TelefonoAdicional2;

        $portuario->UsuarioCreacion = Auth::user()->id;
        $portuario->FechaCreacion   = Carbon::now();
        $portuario->UsuarioActualizacion = Auth::user()->id;
        $portuario->FechaActualizacion   = Carbon::now();
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
