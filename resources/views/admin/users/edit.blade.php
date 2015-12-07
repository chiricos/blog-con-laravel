@extends('admin.template.main')

@section('title','Editar usuario '.$user->name)

@section('content')

	<div class="panel panel-default"> 
	{!! Form::open(['route'=>['admin.users.update',$user->id],'method'=>'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Correo electronico','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',['member'=>'miembro','admin'=>'administrador'],$user->type,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>
	
	{!! Form::close() !!}
	</div>
@endsection