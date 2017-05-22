@extends('layouts.plantilla')

@section('contenido')
    <section class="content">
        {{ Form::open(['class' => 'form-horizontal', 'route' => ['portuario.requisito.store',$portuario->CodTrabajadorPortuario]]) }}
        <div class="box box-solid">
            <div class="box-header bg-light-blue-gradient" id="titulo">
                <div class="box-title">
                    Nuevo Domicilio para {{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }} {{ $portuario->ApellidoMaterno }}
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            {{Form::label('CodRequisito','Codigo de requisito',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('CodRequisito',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('FechaInicio','Fecha de inicio',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::date('FechaInicio',\Carbon\Carbon::now(),['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('FechaFin','Fecha de inicio',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::date('FechaFin',\Carbon\Carbon::now()->addDay(),['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('Observacion','Observaciones',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::textArea('Observacion',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer text-center">
                <button class="btn btn-success btn-sm" type="submit"><span class="fa fa-plus"></span> Guardar</button>
                <a href="{{ url('portuario') }}" class="btn btn-warning btn-sm"><span class="fa fa-times"></span> Cancelar</a>
            </div>
        </div>
        {{ Form::close() }}
    </section>
@endsection