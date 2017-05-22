@extends('layouts.plantilla')

@section('contenido')
<section class="content">
    <div class="box box-solid">
        <div class="box-header bg-light-blue-gradient" id="titulo">
            <div class="box-title">Adjuntar Archivos
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert" hidden id="alerta"></div>
                    {{Form::open(['class' => 'form-horizontal', 'route' => 'adjuntar.store','id' => 'formArchivo', 'files' => true])}}

                    <div class="form-group text-center">
                        <button class="btn btn-success" ><span class="fa fa-check"></span> Guardar</button>
                        <a href="{{url('portuario')}}" class="btn btn-warning"><span class="fa fa-times"></span> Cancelar</a>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection