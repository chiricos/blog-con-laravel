@extends('admin.template.main')

@section('title', 'Agregar Categoria')

@section('content')
	@include('admin.template.partials.errors')
	{!! Form::open(['route'=>'admin.categories.store','method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>
	
	{!! Form::close() !!}

@endsection