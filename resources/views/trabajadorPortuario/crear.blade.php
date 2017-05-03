@extends('layouts.plantilla')
{{--//portuario/create--}}

@section('contenido')
    <section class="content">
        <div class="box">
            <div class="box-header bg-light-blue-gradient">
                <div class="box-title">
                    Nuevo registro de trabajador portuario
                </div>
            </div>
            <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {{Form::open(['class' => 'form-horizontal', 'url' => url('portuario')])}}
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
                            {{Form::label('TipoDocIdentidad','Tipo documento de identidad:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::select('TipoDocIdentidad',[
                                    'DNI' => 'DNI (Documento nacional de identidad)',
                                    'LM' => 'LM (Libreta militar)',
                                    'Bol' => 'Bol (Boleta Militar)',
                                    'CE' => 'CE (Carnet de Extranjería)'
                                ],'DNI',['class' => 'form-control'])}}
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
                                        'Clase A' => 'Clase A',
                                        'Clase B' => 'Clase B',
                                        'Clase C' => 'Clase C',
                                        'Clase D' => 'Clase D',
                                        'Clase E' => 'Clase E',
                                        'Clase F' => 'Clase F',
                                        'Clase G' => 'Clase G',
                                        'Clase H' => 'Clase H',
                                        'Clase I' => 'Clase I'
                                    ], 'Clase A',['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('NroLicenciaBrevete','Número de licencia de brevete:',['class' =>'control-label col-md-4'])}}
                                <div class="col-md-8">
                                    {{Form::text('NroLicenciaBrevete',null,['class' => 'form-control'])}}
                                </div>
                            </div>
                        </div>
                    <div class=" text-center ">
                        <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Enviar</button>
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
<script>
    $(document).ready(function() {
        $('#IndicadorTieneBrevete').on('change', function() {
            if($(this).is(':checked') ) {
                $('#tieneBrevete').show();
            } else {
                $('#tieneBrevete').hide();
            }
        });
    });
</script>
@endsection