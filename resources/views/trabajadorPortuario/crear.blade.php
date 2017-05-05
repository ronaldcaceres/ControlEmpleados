@extends('layouts.plantilla')
{{--//portuario/create--}}

@section('cabecera')
<link rel="stylesheet" href="{{asset('/datepicker/datepicker3.css')}}">
@endsection

@section('contenido')
    <section class="content">
        <div class="box box-solid">
            <div class="box-header bg-light-blue-gradient " id="titulo">
                <div class="box-title">
                    Nuevo registro de trabajador portuario
                </div>
            </div>
            <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert" hidden id="alerta"></div>
                    {{Form::open(['class' => 'form-horizontal', 'url' => url('portuario'), 'id' => 'formularioPortuario'])}}
                        <div class="form-group">
                            {{Form::label('ApellidoPaterno','Apellido paterno:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('ApellidoPaterno',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('ApellidoMaterno','Apellido materno:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('ApellidoMaterno',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('Nombre','Nombre:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('Nombre',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                                {{Form::label('FechaNacimiento', 'Fecha de nacimiento:',['class' => 'control-label col-md-4'])}}
                                <div class="col-md-8">
                                    {{Form::text('FechaNacimiento',\Carbon\Carbon::now(),['class' => 'form-control pull-rigth'])}}
                                </div>
                            </div>
                        <div class="form-group">
                            {{Form::label('Sexo','Sexo:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::select('Sexo',[
                                    'Femenino' => 'Femenino',
                                    'Masculino' => 'Masculino'
                                ],'Masculino',['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('TipoDocIdentidad','Tipo documento de identidad:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::select('TipoDocIdentidad',[
                                    0 => 'DNI (Documento nacional de identidad)',
                                    1 => 'LM (Libreta militar)',
                                    2 => 'Bol (Boleta Militar)',
                                    3 => 'CE (Carnet de Extranjería)'
                                ],0,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('NroDocIdentidad','Número de documento de identidad:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('NroDocIdentidad',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('EstadoCivil','Estado civil',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::select('EstadoCivil',['Soltero' => 'Soltero','Casado' => 'Casado','Divorciado' => 'Divorciado'],'Soltero',['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('Tax','Código Único del sistema pensionario:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('Tax',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('TipoRegimenPensionar','Típo regimen pensionar:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('TipoRegimenPensionar',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('NroCelular','Número de celular:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('NroCelular',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('TelefonoAdicional1','Número de teléfono',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('TelefonoAdicional1',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('TelefonoAdicional2','Otro número de teléfono:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('TelefonoAdicional2',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('IndicadorTieneBrevete','Tiene Brevete',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::checkbox('IndicadorTieneBrevete', 'value', false,['class' => 'checkbox'])}}    
                            </div>
                        </div>
                        <div id="tieneBrevete" hidden>
                            <div class="form-group">
                                {{Form::label('ClaseBrevete','Clase de brevete:',['class' => 'control-label col-md-4'])}}
                                <div class="col-md-8">
                                    {{Form::select('ClaseBrevete',[
                                        'Clase A' =>'Clase A',
                                        'Clase B' =>'Clase B',
                                        'Clase C' =>'Clase C',
                                        'Clase D' =>'Clase D',
                                        'Clase E' =>'Clase E',
                                        'Clase F' =>'Clase F',
                                        'Clase G' =>'Clase G',
                                        'Clase H' =>'Clase H',
                                        'Clase I' =>'Clase I'
                                    ], 'Clase A',['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('NroLicenciaBrevete','Número de licencia de brevete:',['class' =>'control-label col-md-4'])}}
                                <div class="col-md-8">
                                    {{Form::text('NroLicenciaBrevete',null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('FechaRevalidacoinBrevete', 'Fecha de revalidación del brevete:',['class' => 'control-label col-md-4'])}}
                                <div class="col-md-8">
                                    {{Form::text('FechaRevalidacionBrevete',\Carbon\Carbon::now(),['class' => 'form-control pull-rigth', 'id' => 'datepicker'])}}
                                </div>
                            </div>
                        </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-success" id="guardar"><span class="fa fa-check"></span> Enviar</button>
                        <a href="{{url('portuario')}}" class="btn btn-warning"><span class="fa fa-times"></span> Cancelar</a>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<!-- DatePicker -->
<script src="{{asset('datepicker/bootstrap-datepicker.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#IndicadorTieneBrevete').on('change', function() {
            if($(this).is(':checked') ) {
                $('#tieneBrevete').show();
            } else {
                $('#ClaseBrevete').val('Clase A');
                $('#NroLicenciaBrevete').val(null);
                $('#tieneBrevete').hide();
            }
        });
        $('#guardar').click(function (event) {
            event.preventDefault();
            var datos = {
                'ApellidoPaterno'      : $('#ApellidoPaterno').val(),
                'ApellidoMaterno'      : $('#ApellidoMaterno').val(),
                'Nombre'               : $('#Nombre').val(),
                'TipoDocIdentidad'     : $('#TipoDocIdentidad').val(),
                'NroDocIdentidad'      : $('#NroDocIdentidad').val(),
                'EstadoCivil'          : $('#EstadoCivil').val(),
                'Tax'                  : $('#Tax').val(),
                'TipoRegimenPensionar' : $('#TipoRegimenPensionar').val(),
                'NroCelular'           : $('#NroCelular').val(),
                'TelefonoAdicional1'   : $('#TelefonoAdicional1').val(),
                'TelefonoAdicional2'   : $('#TelefonoAdicional2').val(),
                'Sexo'                 : $('#Sexo').val(),
                'ClaseBrevete'         : $('#ClaseBrevete').val(),
                'IndicadorTieneBrevete': $('#IndicadorTieneBrevete').is(':checked')? 1: 0,
                'FechaNacimiento'      : $('#FechaNacimiento').val(),
                'FechaRevalidacoinBrevete': $('#FechaRevalidacoinBrevete').val(),
                '_token'               : '{{csrf_token()}}'
            };
            $.ajax({
                type: 'post',
                url: '{{route("portuario.store")}}',
                data: datos,
                success : function (data) {
                    alert(data.msj);
                },
                error: function (data) {
                    var mensaje = '<ul>';
                    $.each(data.responseJSON, function (i, item) {
                        var idRemplazar = i;
                        $('#'+idRemplazar).parent('div').addClass('has-error');
                        mensaje = mensaje+ '<li>' + item +'</li>';
                    });
                    mensaje = mensaje + '</ul>';
                    alerta = $('#alerta');
                    alerta.html(mensaje);
                    alerta.addClass('alert-danger');
                    alerta.slideDown('slow');
                    $('#titulo').removeClass(' bg-light-blue-gradient');
                    $('#titulo').addClass('bg-red-gradient');
                    setTimeout(function () {
                        $.each(data.responseJSON, function (i, item) {
                            var idRemplazar = i;
                            $('#'+idRemplazar).parent('div').removeClass('has-error');
                        });
                        $('#alerta').removeClass('alert-danger');
                        $('#alerta').slideUp('slow');
                        $('#titulo').removeClass('bg-red-gradient');
                        $('#titulo').addClass('bg-light-blue-gradient');
                    },3000);
                }
            });
        });
    });
</script>
@endsection