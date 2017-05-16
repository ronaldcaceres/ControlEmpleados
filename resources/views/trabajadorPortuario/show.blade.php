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
				<div class="col-xs-12 col-sm-6 form-horizontal">
					<div class="form-group">
						{{ Form::label('codigo','Código:',['class' => 'control-label col-xs-4']) }}
						<div class="col-xs-8">
							{{ Form::text('codigo',$portuario->CodTrabajadorPortuario,['class' =>'form-control', 'readonly']) }}
						</div>
					</div>
					<div class="form-group">
                        {{Form::label('ApellidoPaterno','Apellido paterno:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('ApellidoPaterno',$portuario->ApellidoPaterno,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('ApellidoMaterno','Apellido materno:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('ApellidoMaterno',$portuario->ApellidoMaterno,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Nombre','Nombre:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('Nombre',$portuario->Nombre,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                            {{Form::label('FechaNacimiento', 'Fecha de nacimiento:',['class' => 'control-label col-md-4'])}}
                            <div class="col-md-8">
                                {{Form::text('FechaNacimiento',$portuario->FechaNacimiento,['class' => 'form-control', 'readonly'])}}
                            </div>
                        </div>
                    <div class="form-group">
                        {{Form::label('Sexo','Sexo:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('Sexo',$portuario->Sexo,['class' => 'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TipoDocIdentidad','Tipo documento de identidad:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('TipoDocIdentidad',$portuario->TipoDocIdentidad == 0 ?'DNI (Documento nacional de identidad)':$portuario->TipoDocIdentidad == 1 ? 'LM (Libreta militar)': $portuario->TipoDocIdentidad == 2 ? 'Bol (Boleta Militar)':'CE (Carnet de Extranjería)',['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('NroDocIdentidad','Número de documento de identidad:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('NroDocIdentidad',$portuario->NroDocIdentidad,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('EstadoCivil','Estado civil',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('EstadoCivil',$portuario->EstadoCivil,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Tax','Código Único del sistema pensionario:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('Tax',$portuario->Tax,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TipoRegimenPensionar','Típo regimen pensionar:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('TipoRegimenPensionar',$portuario->TipoRegimenPensionar,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('NroCelular','Número de celular:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('NroCelular',$portuario->NroCelular,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TelefonoAdicional1','Número de teléfono',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('TelefonoAdicional1',$portuario->TelefonoAdicional1,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('TelefonoAdicional2','Otro número de teléfono:',['class' => 'control-label col-md-4'])}}
                        <div class="col-md-8">
                            {{Form::text('TelefonoAdicional2',$portuario->TelefonoAdicional2,['class' => 'form-control','readonly'])}}
                        </div>
                    </div>
                    @if($portuario->IndicadorTieneBrevete == 1)
	                    <div class="form-group">
	                        {{Form::label('ClaseBrevete','Clase de brevete:',['class' => 'control-label col-md-4'])}}
	                        <div class="col-md-8">
	                            {{Form::text('ClaseBrevete',$portuario->ClaseBrevete,['class' => 'form-control','readonly'])}}
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        {{Form::label('NroLicenciaBrevete','Número de licencia de brevete:',['class' =>'control-label col-md-4'])}}
	                        <div class="col-md-8">
	                            {{Form::text('NroLicenciaBrevete',$portuario->NroLicenciaBrevete,['class' => 'form-control', 'readonly'])}}
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        {{Form::label('FechaRevalidacoinBrevete', 'Fecha de revalidación del brevete:',['class' => 'control-label col-md-4'])}}
	                        <div class="col-md-8">
	                            {{Form::text('FechaRevalidacionBrevete',$portuario->FechaRevalidacionBrevete,['class' => 'form-control', 'readonly'])}}
	                        </div>
	                    </div>
                    @endif
				</div>
				<div class="col-xs-12 col-sm-6">
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