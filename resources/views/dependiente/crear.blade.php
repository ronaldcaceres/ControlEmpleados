@extends('layouts.plantilla')

@section('contenido')
    <section class="content">
        <div class="box box-solid">
            <div class="box-header bg-light-blue-gradient" id="titulo">
                <div class="box-title">nuevo registro para dependientes de {{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }}
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert" hidden id="alerta"></div>
                        {{Form::open(['class' => 'form-horizontal', 'route' =>['portuario.dependiente.store', $portuario->CodTrabajadorPortuario], 'id' => 'formularioPortuario'])}}
                        <div class="form-group">
                            {{Form::label('NombreCompleto','Nombre Completo:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('NombreCompleto',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('TipoDependiente','Tipo de dependiente:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::number('TipoDependiente',null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('FechaNacimiento','Fecha de Nacimiento:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::date('FechaNacimiento',null,['class' => 'form-control'])}}
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
<script>
    $(document).ready(function ()
    {
        $('#formularioPortuario').submit(function (e) {
            e.preventDefault();
            var datos = {
                'NombreCompleto'   : $('#NombreCompleto').val(),
                'TipoDependiente'  : $('#TipoDependiente').val(),
                'FechaNacimiento'  : $('#FechaNacimiento').val()
            };

            var direccion =  $(this).attr('action');
            var metodo  = $(this).attr('method');
            $.ajax({
                url: direccion,
                type:   metodo,
                data:   datos,
                headers: {'X-CSRF-Token': '{{csrf_token()}}'},
                success:   function (resultado) {
                    alert(resultado.msj);
                    window.location.href = '{{ url('portuario') }}';
                },
                error:      function (resultado) {
                    var mensaje = '<ul>';
                    $.each(resultado.responseJSON, function (i, item) {
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
                        $.each(resultado.responseJSON, function (i, item) {
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