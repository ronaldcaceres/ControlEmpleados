@extends('layouts.plantilla')

@section('cabecera')
    <link rel="stylesheet" href="{{asset('bootstrap/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
@endsection

@section('contenido')
    <section class="content">
        <div class="box box-solid">
            <div class="box-header bg-light-blue-gradient" id="titulo">
                <div class="box-title">Requisitos para {{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }}
                </div>
            </div>
            <div class="box-body">
                @if($portuario->requisitos->isEmpty())
                    <p>No tenemos cuentas registradas</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped" id='tablaCuentas'>
                            <thead>
                            <tr>
                                <th>Código de requisito</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha Final</th>
                                <th>Observaciones</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($portuario->requisitos as $requisito)
                                <tr>
                                    <td>{{ $requisito->CodRequisito }}</td>
                                    <td>{{ $requisito->FechaInicio }}</td>
                                    <td>{{ $requisito->FechaFin }}</td>
                                    <td>{{ $requisito->Observacion }}</td>
                                    <td class="btn-group-sm">
                                        {{ Form::open(['route' => ['portuario.requisito.destroy',$requisito->CodTrabajadorPortuario, $requisito->CodRequisitoTrabajadorPortuario], 'method' => 'delete']) }}
                                        <button class="btn btn-danger btn-sm" type="submit"><span class="fa fa-minus"></span></button>
                                        <a href="{{url(route('portuario.requisito.edit',[$requisito->CodTrabajadorPortuario,$requisito->CodRequisitoTrabajadorPortuario]))}}" class="btn btn-primary btn-sm">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            <div class="box-footer">
                <div class="text-center">
                    <a href="{{url('portuario')}}" class="btn btn-warning"><span class="fa fa-times"></span> Cancelar</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{asset('js/jquery/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#tablaCuentas').DataTable();
        });
    </script>
@endsection