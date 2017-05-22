@extends('layouts.plantilla')

@section('contenido')
<section class="content">
	<div class="box box-solid">
		<div class="box-header bg-light-blue-gradient">
			<div class="box-title">
				Descripción de trabajador portuario
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-xs-12 col-sm-4 form-horizontal">
					<div class="form-group">
						{{ Form::label('codigo','Código:',['class' => 'control-label col-xs-5']) }}
						<div class="col-xs-7">
							{{ Form::text('codigo',$portuario->CodTrabajadorPortuario,['class' =>'form-control', 'readonly']) }}
						</div>
					</div>
					<div class="form-group">
                        {{Form::label('ApellidoPaterno','Apellido paterno:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('ApellidoPaterno',$portuario->ApellidoPaterno,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('ApellidoMaterno','Apellido materno:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('ApellidoMaterno',$portuario->ApellidoMaterno,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Nombre','Nombre:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('Nombre',$portuario->Nombre,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                            {{Form::label('FechaNacimiento', 'Fecha de nacimiento:',['class' => 'control-label col-md-5'])}}
                            <div class="col-md-7">
                                {{Form::text('FechaNacimiento',$portuario->FechaNacimiento,['class' => 'form-control', 'readonly'])}}
                            </div>
                        </div>
                    <div class="form-group">
                        {{Form::label('Sexo','Sexo:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('Sexo',$portuario->Sexo,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TipoDocIdentidad','Tipo documento de identidad:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('TipoDocIdentidad',$portuario->TipoDocIdentidad == 0 ?'DNI (Documento nacional de identidad)':$portuario->TipoDocIdentidad == 1 ? 'LM (Libreta militar)': $portuario->TipoDocIdentidad == 2 ? 'Bol (Boleta Militar)':'CE (Carnet de Extranjería)',['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('NroDocIdentidad','Número de documento de identidad:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('NroDocIdentidad',$portuario->NroDocIdentidad,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('EstadoCivil','Estado civil',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('EstadoCivil',$portuario->EstadoCivil,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Tax','Código Único del sistema pensionario:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('Tax',$portuario->Tax,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TipoRegimenPensionar','Típo regimen pensionar:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('TipoRegimenPensionar',$portuario->TipoRegimenPensionar,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('NroCelular','Número de celular:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('NroCelular',$portuario->NroCelular,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TelefonoAdicional1','Número de teléfono',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('TelefonoAdicional1',$portuario->TelefonoAdicional1,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TelefonoAdicional2','Otro número de teléfono:',['class' => 'control-label col-md-5'])}}
                        <div class="col-md-7">
                            {{Form::text('TelefonoAdicional2',$portuario->TelefonoAdicional2,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    @if($portuario->IndicadorTieneBrevete == 1)
	                    <div class="form-group">
	                        {{Form::label('ClaseBrevete','Clase de brevete:',['class' => 'control-label col-md-5'])}}
	                        <div class="col-md-7">
	                            {{Form::text('ClaseBrevete',$portuario->ClaseBrevete,['class' => 'form-control','readonly'])}}
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        {{Form::label('NroLicenciaBrevete','Número de licencia de brevete:',['class' =>'control-label col-md-5'])}}
	                        <div class="col-md-7">
	                            {{Form::text('NroLicenciaBrevete',$portuario->NroLicenciaBrevete,['class' => 'form-control', 'readonly'])}}
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        {{Form::label('FechaRevalidacoinBrevete', 'Fecha de revalidación del brevete:',['class' => 'control-label col-md-5'])}}
	                        <div class="col-md-7">
	                            {{Form::text('FechaRevalidacionBrevete',$portuario->FechaRevalidacionBrevete,['class' => 'form-control', 'readonly'])}}
	                        </div>
	                    </div>
                    @endif
				</div>
				<div class="col-xs-12 col-sm-8">
					<div class="box box-solid box-default">	<!-- Residencias -->
						<div class="box-header with-border">
							<h4 class="box-title">Residencias</h3>
							<div class="box-tools pull-right">
						    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						    </div>
						</div>
						<div class="box-body">
						@if($portuario->residencia->isEmpty())
							<p>No tenemos una Dirección registrada	</p>
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
											<th class="text-center">
												{{ Form::open(['route' => ['portuario.domicilio.destroy',$residencia->CodTrabajadorPortuario, $residencia->CodLogResidencia], 'method' => 'delete']) }}
												<button class="btn btn-danger btn-xs" type="submit"><span class="fa fa-minus"></span></button>
												{{ Form::close() }}
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
								<a href="{{ route('portuario.domicilio.create',$portuario->CodTrabajadorPortuario) }}" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Nueva residencia</a>
							</div>
						</div>
					</div>	<!-- Fin de residencias -->
					<div class="box box-solid box-default">
						<div class="box-header">
							<h4 class="box-title with-border">Dependientes </h4>
							<div class="box-tools pull-right">
						    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						    </div>
						</div>
						<div class="box-body">
						@if($portuario->dependientes->isEmpty())
							<p>No tenemos dependietes registrados</p>
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
						<div class="box-footer">
							<div class="text-center">
								<a href="{{ route('portuario.dependiente.create',$portuario->CodTrabajadorPortuario) }}" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Nuevo Dependiente</a>
							</div>
						</div>
					</div><!-- Fin de dependientes -->
					<div class="box box-solid box-default">	<!-- inicio de Cuentas Bancarias	-->
						<div class="box-header">
							<h4 class="box-title with-border">Cuentas Bancarias </h4>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							</div>
						</div>
						<div class="box-body">
							@if($portuario->cuentas->isEmpty())
								<p>No tenemos cuentas bancarias registrados</p>
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
								<a href="{{ route('portuario.cuenta.create',$portuario->CodTrabajadorPortuario) }}" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Nueva Cuenta Bancaria</a>
							</div>
						</div>
					</div>	<!-- fin de Cuentas Bancarias	-->
					<div class="box box-solid box-default">	<!-- inicio de requisitos	-->
						<div class="box-header">
							<h4 class="box-title with-border">Cuentas Bancarias </h4>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
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
								<a href="{{ route('portuario.requisito.create',$portuario->CodTrabajadorPortuario) }}" class="btn btn-success btn-sm">
									<span class="fa fa-plus"></span> Nuevo Requisito Trabajador Portuario
								</a>
							</div>
						</div>
					</div> <!-- fin de requisitos	-->
				</div>
			</div>
		</div>
		<div class="box-footer">
			<div class="text-center">
				<a href="{{url('portuario')}}" class="btn btn-warning btn-sm"><span class="fa fa-times"></span> Cancelar</a>
			</div>
		</div>
	</div>
</section>
@endsection