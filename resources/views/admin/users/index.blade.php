@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')

	<a href="{{route('admin.users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
	
	<table class="table table-striped"><hr>
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Tipo</th>
		<th>Acción</th>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					@if($user->type == "admin")
						<span class="label label-danger">{{$user->type}} </span>
					@else
						<span class="label label-primary">{{$user->type}} </span>
					@endif
				</td>
				<td></span><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning glyphicon glyphicon-cog"></a> <a href="{{route('admin.users.destroy',$user->id)}}" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('¿Seguro que deseas eliminarlo?')"></a></td>
			</tr> 
		@endforeach
	</tbody>

	</table>
	{!! $users->render() !!}

@endsection