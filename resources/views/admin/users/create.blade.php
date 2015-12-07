@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')
	
	@include('admin.template.partials.errors')

	<div class="panel panel-default"> 
	{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo electronico']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class'=>'form-control','placeholder'=>'Correo electronico']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',['member'=>'miembro','admin'=>'administrador'],null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>
	
	{!! Form::close() !!}
	</div>
@endsection