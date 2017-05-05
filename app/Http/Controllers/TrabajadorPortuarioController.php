<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\trabajadorPortuario;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Facades\Datatables;

class TrabajadorPortuarioController extends Controller
{
    public function getPortuarios()
    {
        $portuarios = trabajadorPortuario::select();
        return Datatables::of($portuarios)->make(true);
    }
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
        if($request->IndicadorTieneBrevete){
            $this->validate($request, [
                'ApellidoPaterno'           =>  'required',
                'ApellidoMaterno'           =>  'required',
                'Nombre'                    =>  'required',
                'Tax'                       =>  'required',
                'ClaseBrevete'              =>  '',
                'EstadoCivil'               =>  '',
                'FechaNacimiento'           =>  'required',
                'FechaRevalidacionBrevete'  =>  'required',
                'NroCelular'                =>  'required',
                'TipoDocIdentidad'          =>  '',
                'NroDocIdentidad'           =>  'required',
                'NroLicenciaBrevete'        =>  'required',
                'TelefonoAdicional1'        =>  '',
                'TelefonoAdicional2'        =>  '',
                'Sexo'                      =>  '',
                'TipoRegimenPensionar'      =>  'required',
                'IndicadorTieneBrevete'     =>  '',
            ]);
        } else {
            $this->validate($request, [
                'ApellidoPaterno'           =>  'required',
                'ApellidoMaterno'           =>  'required',
                'Nombre'                    =>  'required',
                'Tax'                       =>  'required',
                'ClaseBrevete'              =>  '',
                'EstadoCivil'               =>  '',
                'FechaNacimiento'           =>  'required',
                'FechaRevalidacionBrevete'  =>  '',
                'NroCelular'                =>  'required',
                'TipoDocIdentidad'          =>  '',
                'NroDocIdentidad'           =>  'required',
                'NroLicenciaBrevete'        =>  '',
                'TelefonoAdicional1'        =>  '',
                'TelefonoAdicional2'        =>  '',
                'Sexo'                      =>  '',
                'TipoRegimenPensionar'      =>  'required',
                'IndicadorTieneBrevete'     =>  '',
            ]);
        }
        
        $portuario = new TrabajadorPortuario();
        $portuario->ApellidoPaterno = $request->ApellidoPaterno;
        $portuario->ApellidoMaterno = $request->ApellidoMaterno;
        $portuario->Nombre = $request->Nombre;
        $portuario->Tax = $request->Tax;
        $portuario->EstadoCivil = $request->EstadoCivil;
        $portuario->TipoRegimenPensionar = $request->TipoRegimenPensionar;
        $portuario->NroCelular = $request->NroCelular;
        $portuario->TelefonoAdicional1 = $request->TelefonoAdicional1;
        $portuario->TelefonoAdicional2 = $request->TelefonoAdicional2;
        $portuario->Sexo = $request->Sexo;
        $portuario->FechaNacimiento = (new Carbon($request->FechaNacimiento))->toDateTimeString();
        $portuario->IndicadorTieneBrevete = $request->IndicadorTieneBrevete;
        $portuario->TipoDocIdentidad = $request->TipoDocIdentidad;
        $portuario->NroDocIdentidad = $request->NroDocIdentidad;


        if($portuario->IndicadorTieneBrevete){
            $portuario->ClaseBrevete = $request->ClaseBrevete;
            $portuario->NroLicenciaBrevete = $request->NroLicenciaBrevete;
            $portuario->FechaRevalidacionBrevete = (new Carbon($request->FechaRevalidacionBrevete))->toDateTimeString();
        }
        $portuario->Activo = true;
        $portuario->UsuarioCreacion = Auth::user()->id;
        $portuario->FechaCreacion   = Carbon::now();
        $portuario->UsuarioActualizacion = Auth::user()->id;
        $portuario->FechaActualizacion   = Carbon::now();

        $portuario->save();
        return response()->json(['msj' => 'Datos Guardados Satisfactoriamente'], 200);
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
