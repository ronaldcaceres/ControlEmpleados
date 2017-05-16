@extends('layouts.plantilla')

@section('contenido')
<section class="content">
	<div class="box box-solid">
		<div class="box-header bg-light-blue-gradient">
			<div class="box-title"> Residencias registrada de
				{{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }} {{ $portuario->ApellidoMaterno }}
			</div>
		</div>
		<div class="box-body">
		@if($portuario->residencia->isEmpty())
			<h2 class="title">
				no tenemos registros
			</h2>
			<button class="btn btn-primary btn-sm">
				<span class="fa fa-plus"></span> nuevo registro
			</button>
		@else	
			<div class="table-responsive">
				<table class="table table-striped" id="tablaResidencia">
					<thead>
						<tr>
							<th>Nombre de contacto</th>
							<th>Contacto telefónico 1</th>
							<th>Contacto telefónico 2</th>
							<th>Correo electrónico</th>
							<th>Departamento</th>
							<th>Provincia</th>
							<th>Distrito</th>
							<th>Comententario</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
					@foreach($portuario->residencia as $residencia)
						<tr>
							<th>{{ $residencia->ContactoNombre }}</th>
							<th>{{ $residencia->ContactoTelefono1 }}</th>
							<th>{{ $residencia->ContactoTelefono2 }}</th>
							<th>{{ $residencia->CorreoElectronico }}</th>
							<th>{{ $residencia->Departamento }}</th>
							<th>{{ $residencia->Provincia }}</th>
							<th>{{ $residencia->Distrito }}</th>
							<th>{{ $residencia->ComentariosExtra }}</th>
							<th>
								<a href="#" class="btn btn-danger btn-xs"><span class="fa fa-minus"></span></a>
								<a href="#" class="btn btn-primary btn-xs"><span class="fa fa-edit"></span></a>
							</th>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		@endif
		</div>
		<div class="box-footer">
			<div class="text-center">
				<a href="{{url('portuario')}}" class="btn btn-warning btn-sm"><span class="fa fa-times"></span> Cancelar</a>
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script src="{{asset('js/jquery/jquery.dataTables.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
<script>
	$(document).ready(function() {
		var tabla = $('#tablaResidencia').DataTable({
			oLanguage: {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sInfo": "Mostrando desde _START_ hasta _END_ de _TOTAL_ registros",
				"sInfoEmpty": "No existen registros",
				"sInfoFiltered": "(filtrado de un total de _MAX_ líneas)",
				"sInfoPostFix": "",
				"sSearch": "Buscar:",
				"sUrl": "",
				"oPaginate": {
					"sFirst":    "Primero",
					"sPrevious": "Anterior",
					"sNext":     "Siguiente",
					"sLast":     "Último"
				}
			}
		});
	});
</script>
@endsection