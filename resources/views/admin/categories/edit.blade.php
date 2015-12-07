@extends('admin.template.main')

@section('title','Editar categoria '.$category->name)

@section('content')

	<div class="panel panel-default"> 
	{!! Form::open(['route'=>['admin.categories.update',$category->id],'method'=>'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		</div>
	
	{!! Form::close() !!}
	</div>
@endsection