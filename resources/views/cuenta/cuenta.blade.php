@extends('layouts.plantilla')

@section('cabecera')
	<link rel="stylesheet" href="{{asset('bootstrap/css/dataTables.bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
@endsection

@section('contenido')
<section class="content">
	<div class="box box-solid">
		<div class="box-header bg-light-blue-gradient" id="titulo">
            <div class="box-title">Cuentas bancarias registradas para  {{ $portuario->Nombre }} {{ $portuario->ApellidoPaterno }}
            </div>
        </div>
        <div class="box-body">
        	@if($portuario->cuentas->isEmpty())
        		<p>No tenemos cuentas registradas</p>
    		@else
    		<div class="table-responsive">
    			<table class="table table-striped" id='tablaCuentas'>
    				<thead>
    					<tr>
    						<th>Banco</th>
    						<th>Número de cuenta</th>
    						<th>Tipo de cuenta</th>
    						<th>Moneda</th>
    						<th>Opciones</th>
    					</tr>
    				</thead>
    				<tbody>
					@foreach($portuario->cuentas as $cuenta)
						<tr>
							<td>{{ $cuenta->CodBanco }}</td>
							<td>{{ $cuenta->NroCuenta }}</td>
							<td>{{ $cuenta->TipoCuenta }}</td>
							<td>{{ $cuenta->Moneda }}</td>
							<td class="btn-group-sm">
								{{ Form::open(['route' => ['portuario.cuenta.destroy',$cuenta->CodTrabajadorPortuario, $cuenta->CodCuentaBancaria], 'method' => 'delete']) }}
								<button class="btn btn-danger btn-sm" type="submit"><span class="fa fa-minus"></span></button>
								<a href="{{url(route('portuario.cuenta.edit',[$cuenta->CodTrabajadorPortuario,$cuenta->CodCuentaBancaria]))}}" class="btn btn-primary btn-sm">
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