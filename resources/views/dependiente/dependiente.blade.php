@extends('layouts.plantilla')

@section('cabecera')
	<link rel="stylesheet" href="{{asset('bootstrap/css/dataTables.bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
@endsection

@section('contenido')
<section class="content">
	<div class="box box-solid">
		<div class="box-header bg-light-blue-gradient">
			<div class="box-title"> Dependienres  registrados de
				{{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }} {{ $portuario->ApellidoMaterno }}
			</div>
		</div>
		<div class="box-body">
		@if($portuario->dependientes->isEmpty())
			<h2 class="title">No tenemos registros</h2>
		@else
			<div class="table-responsive">
				<table class="table talbe-striped" id="tablaDependientes">
					<thead>
						<tr>
							<th>Nombre completo</th>
							<th>Tipo de dependiente</th>
							<th>Fecha de nacimiento</th>
							<th>opciones</th>
						</tr>
					</thead>
					<tbody>
					@foreach($portuario->dependientes as $dependiente)
						<tr>
							<th>{{ $dependiente->NombreCompleto }}</th>
							<th>{{ $dependiente->TipoDependiente }}</th>
							<th>{{ $dependiente->FechaNacimiento }}</th>
							<th class="text-center">{{ Form::open(['route' => ['portuario.dependiente.destroy',$dependiente->CodTrabajadorPortuario, $dependiente->CodDependiente], 'method' => 'delete']) }}
								<button class="btn btn-danger btn-sm" type="submit"><span class="fa fa-minus"></span></button>
								{{ Form::close() }}
							</th>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		@endif
		</div>
	</div>
</section>
@endsection

@section('script')
<script src="{{asset('js/jquery/jquery.dataTables.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
<script>
	$(document).ready(function () {
		$('#tablaDependientes').DataTable();
    });
</script>
@endsection