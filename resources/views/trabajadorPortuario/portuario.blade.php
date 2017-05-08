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
                        <div class="btn-group">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="fa fa-plus"></span> Nuevo
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('portuario/create')}}">Trabajador</a></li>
                                <li><a href="#">Domicilio</a></li>
                                <li><a href="#">Dependencia</a></li>
                                <li><a href="#">Especialidad</a></li>
                                <li><a href="#">Cuenta Bancaria</a></li>
                                <li><a href="#">Registrar Permiso</a></li>
                                <li><a href="#">Documentos adjuntos</a></li>
                            </ul>
                        </div>
                        {{--<a href="{{url('portuario/create')}}" type="button" class="btn btn-default btn-sm" id="nuevo"><span class="fa fa-plus"></span> Nuevo</a>--}}
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-flag"></span> Disponivilidad</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-thumbs-down"></span> Sancionar</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-check"></span> Aprobar Datos</button>
                        <button type="button" class="btn btn-default btn-sm"><span class="fa fa-times"></span> Anular Permiso</button>
                        <hr>
                        <table class="table table-striped" id="tablaPortuario">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Tax</th>
                                    <th>Clase de Brevete</th>
                                    <th>Fecha de Nacimiento</th>
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
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
        var tabla = $('#tablaPortuario').DataTable({
           processing: true,
           serverSide: true,
           ajax: '{{route("portuario.getP")}}',
           columns: [
               {data: 'CodTrabajadorPortuario'},
               {data: 'Nombre'},
               {data: 'ApellidoPaterno'},
               {data: 'ApellidoMaterno'},
               {data: 'Tax'},
               {data: 'ClaseBrevete'},
               {data: 'FechaNacimiento'}
               ],
           initComplete: function () {
               this.api().columns().every(function () {
                   var column = this;
                   var input = document.createElement("input");
                   $(input).appendTo($(column.footer()).empty())
                       .on('keyup change', function () {
                           var val = $.fn.dataTable.util.escapeRegex($(this).val());
                           column.search(val ? val : '', true, false).draw();
                       });
               });
           }
       });

        $('#tablaPortuario tbody').on( 'click', 'tr', function () {
          console.log(tabla.$('tr.bg-gray-active').html());
            if ( $(this).hasClass('bg-gray-active') ) {
                $(this).removeClass('bg-gray-active');
            }
            else {
                tabla.$('tr.bg-gray-active').removeClass('bg-gray-active');
                $(this).addClass('bg-gray-active');
            }
        } );
    });
</script>
@endsection