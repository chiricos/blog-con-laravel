@extends('admin.template.main')

@section('title','categorias')

@section('content')

	<a href="{{route('admin.categories.create')}}" class="btn btn-info">Registrar nueva categoria</a>
	
	<table class="table table-striped"><hr>
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Acción</th>
	</thead>
	<tbody>
		@foreach($categories as $category)
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
				<td></span><a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning glyphicon glyphicon-cog"></a> <a href="{{route('admin.categories.destroy',$category->id)}}" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('¿Seguro que deseas eliminarlo?')"></a></td>
			</tr> 
		@endforeach
	</tbody>

	</table>
	{!! $categories->render() !!}
@endsection