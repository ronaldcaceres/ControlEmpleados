<?php

namespace App\Http\Controllers;

use App\TrabajadorPortuario;
use App\LogResidencia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogResidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($codTrabajador)
    {
        $portuario = TrabajadorPortuario::find($codTrabajador);
        return view('residencia.residencia')->with(compact('portuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($codTrabajador)
    {
        $portuario = TrabajadorPortuario::find($codTrabajador);
        return view('residencia.crear')->with(compact('portuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($codTrabajador,Request $request)
    {
        $this->validate($request, [
            'ContactoNombre'    =>  'required',
            'ContactoTelefono1' =>  'required|numeric',
            'CorreoElectronico' =>  'required|email',
            'Departamento'      =>  'required',
            'Provincia'         =>  'required',
            'Distrito'          =>  'required',
            'ComentariosExtra'  =>  'required'
            ]);
        $nuevo = new LogResidencia();
        $nuevo->ContactoNombre = $request->ContactoNombre;
        $nuevo->codTrabajadorPortuario = $codTrabajador;
        $nuevo->ContactoTelefono1 = $request->ContactoTelefono1;
        $nuevo->ContactoTelefono2 = $request->ContactoTelefono2;
        $nuevo->CorreoElectronico = $request->CorreoElectronico;
        $nuevo->Departamento = $request->Departamento;
        $nuevo->Distrito = $request->Distrito;
        $nuevo->Provincia = $request->Provincia;
        $nuevo->ComentariosExtra = $request->ComentariosExtra;
        $nuevo->Activo = 1;
        $nuevo->UsuarioCreacion = Auth::user()->id;
        $nuevo->UsuarioActualizacion = Auth::user()->id;
        $nuevo->FechaCreacion = (new Carbon($request->FechaNacimiento))->toDateTimeString();
        $nuevo->FechaActualizacion = (new Carbon($request->FechaNacimiento))->toDateTimeString();

        $nuevo->save();

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
    public function edit($CodTrabajador, $CodDomicilio)
    {
        $portuario = TrabajadorPortuario::find($CodTrabajador);

        return view('residencia.editar',['portuario' => $portuario, 'residencia' => $portuario->residencia->find($CodDomicilio)]);
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
    public function destroy($codPortuario,$CodDomicilio)
    {
        $residencia = TrabajadorPortuario::find($codPortuario)->residencia->find($CodDomicilio);
        $residencia->delete();
        return back();
    }
}
