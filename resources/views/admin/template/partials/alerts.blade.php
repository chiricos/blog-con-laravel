@if(Session::get('message'))
	<div class="alert alert-success" role="alert">
		{{session('message')}}
	</div>
@endif
@if(Session::get('message_error'))
	<div class="alert alert-danger" role="alert">
		{{session('message_error')}}
	</div>
@endif