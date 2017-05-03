@extends('layouts.plantilla')

@section('cabecera')
    <link rel="stylesheet" href="{{asset('bootstrap/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
@endsection

@section('contenido')
<section class="content">
	<div class="box ">
		<div class="box-header bg-light-blue-gradient">
			<div class="box-title">
				Panel de administración
			</div>
		</div>
		<div class="box-body">
            <div class="">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#gestion_trabajadores" aria-controls="gestion_trabajadores" role="tab" 
                           data-toggle="tab" aria-expanded="true">Gestion de trabajadores</a>
                    </li>
                    <li role="presentation" class>
                        <a href="#requerimientos" aria-controls="requerimientos" role="tab" data-toggle="tab"
                        aria-expanded="false">Requerimientos</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#nombrada" aria-controls="nombrada" role="tab" data-toggle="tab"
                        aria-expanded="false">Nombrada</a>
                    </li>
                    <li role="presentation">
                        <a href="#maestras" aria-controls="maestras" role="tab" data-toggle="tab"
                        aria-expanded="false">Maestras</a>
                    </li>
                    <li role="presentation">
                        <a href="#reportes" aria-controls="reportes" role="tab" data-toggle="tab"
                        aria-expanded="false">Reportes</a>
                    </li>
                    <li role="presentation">
                        <a href="#seguridad" aria-controls="seguridad" role="tab" data-toggle="tab"
                        aria-expanded="false">Seguridad</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="gestion_trabajadores">
                        <a href="{{url('portuario/create')}}" type="button" class="btn btn-default btn-sm" id="nuevo"><span class="fa fa-plus"></span> Nuevo</a>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-flag"></span> Disponivilidad</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-thumbs-down"></span> Sancionar</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-check"></span> Aprobar Datos</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span> Anular Permiso</button>
                        <hr>
                        <table class="table table-striped" id="tablaPortuario">
                            <thead>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Tax</th>
                            <th>Clase de Brevete</th>
                            <th>Fecha de Nacimiento</th>
                            </thead>
                            <tbody>
                            @foreach($portuarios as $portuario)
                                <tr>
                                    <td>{{$portuario->CodTrabajadorPortuario}}</td>
                                    <td>{{$portuario->Nombre}}</td>
                                    <td>{{$portuario->ApellidoPaterno}}</td>
                                    <td>{{$portuario->ApellidoMaterno}}</td>
                                    <td>{{$portuario->Tax}}</td>
                                    <td>{{$portuario->ClaseBrevete}}</td>
                                    <td>{{$portuario->FechaNacimiento}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-panel" id="requerimientos">

                    </div>
                </div>
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
       $('#tablaPortuario').DataTable();
    });
</script>
@endsection