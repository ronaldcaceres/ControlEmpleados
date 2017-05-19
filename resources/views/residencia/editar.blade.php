@extends('layouts.plantilla')

@section('contenido')
<section class="content">
    <div class="box box-solid">
        <div class="box-header bg-light-blue-gradient" id="titulo">
            <div class="box-title">
                Nuevo Domicilio para {{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }} {{ $portuario->ApellidoMaterno }}
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert" hidden id="alerta"></div>
                {{ Form::open(['class' => 'form-horizontal', 'route' => ['portuario.domicilio.update',$portuario->CodTrabajadorPortuario, $residencia->CodLogResidencia] ,'method' => 'put']) }}
                <div class="form-group">
                    {{ Form::label('ContactoNombre','Nombre de Contacto:',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::text('ContactoNombre',$residencia->ContactoNombre,['class' => 'form-control', 'placeholder' => 'Ingrese nombre de contacto']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('ContactoTelefono1','Contacto telefónico:',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::text('ContactoTelefono1',$residencia->ContactoTelefono1,['class' =>'form-control', 'placeholder' => 'numero telefónico']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('ContactoTelefono2','Otro contacto telefónico:',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::text('ContactoTelefono2',$residencia->ContactoTelefono2,['class' =>'form-control', 'placeholder' => 'numero telefónico 2']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('CorreoElectronico','Correo electrónico:',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::text('CorreoElectronico',$residencia->CorreoElectronico,['class' => 'form-control', 'placeholder' => 'Correo electrónico']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Departamento','Departamento',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::number('Departamento',$residencia->Departamento,['class' => 'form-control', 'placeholder' => 'Departamento']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Provincia','Provincia',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::number('Provincia',$residencia->Provincia,['class' => 'form-control', 'placeholder' => 'Provincia']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('Distrito','Distrito',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::number('Distrito',$residencia->Distrito,['class' => 'form-control', 'placeholder' => 'Distrito']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('ComentariosExtra','Comentarios Extras',['class' => 'control-label col-md-4']) }}
                    <div class="col-md-8">
                        {{ Form::textArea('ComentariosExtra',$residencia->ComentariosExtra,['class' => 'form-control', 'placeholder' => 'Escriba un comentario']) }}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="box-footer text-center">
            <button class="btn btn-success btn-sm" type="submit"><span class="fa fa-plus"></span> Guardar</button>
            {{ Form::close() }}
            <a href="{{ url('portuario') }}" class="btn btn-warning btn-sm"><span class="fa fa-times"></span> Cancelar</a>
        </div>
    </div>
</section>
@endsection