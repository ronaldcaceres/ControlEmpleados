@extends('layouts.plantilla')

@section('contenido')
    <section class="content">
        <div class="box box-solid">
            <div class="box-header bg-light-blue-gradient" id="titulo">
                <div class="box-title">Cuentas resgistradas a  {{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }}
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert" hidden id="alerta"></div>
                        {{Form::open(['class' => 'form-horizontal', 'route' =>['portuario.cuenta.store', $portuario->CodTrabajadorPortuario], 'id' => 'formularioCuenta'])}}
                        <div class="form-group">
                            {{ Form::label('CodBanco','Banco',['class' => 'control-label col-md-4']) }}
                            <div class="col-md-8">
                                {{ Form::select('CodBanco',['Banco union', 'Banco Solidario', 'Banco numero 1'],0,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('NroCuenta','Numero de cuenta',['class' => 'control-label col-md-4']) }}
                            <div class="col-md-8">
                                {{ Form::text('NroCuenta',null,['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('TipoCuenta', 'Tipo de cuenta', ['class' => 'control-label col-md-4']) }}
                            <div class="col-md-8">
                                {{ Form::select('TipoCuenta', ['Cuenta bancaria', 'Cuenta corriente', 'Libretas de ahorro'], 0, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('Moneda', 'Moneda:', ['class' => 'control-label col-md-4']) }}
                            <div class="col-md-8">
                                {{ Form::select('Moneda', ['Pesos', 'Dolares', 'Euros'], 0,['class' => 'form-control']) }}
                            </div>
                        </div>
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

@section('script')
<script>
    $(document).ready(function ()
    {
        $('#formularioCuenta').submit(function (e) {
            e.preventDefault();
            var datos = {
                'CodBanco'   : $('#CodBanco').val(),
                'NroCuenta'  : $('#NroCuenta').val(),
                'TipoCuenta'  : $('#TipoCuenta').val(),
                'Moneda'    : $('#Moneda').val()
            };

            var direccion =  $(this).attr('action');
            var metodo  = $(this).attr('method');
            $.ajax({
                url: direccion,
                type:   metodo,
                data:   datos,
                headers: {'X-CSRF-Token': '{{csrf_token()}}'},
                success:    function(respuesta){
                    alert(respuesta.msj);
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