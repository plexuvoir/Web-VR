@extends('app')

@section('content')
<div id="formContent" class="container">					
	<form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
		@csrf
		<div class="form-group my-3">
			<label for="title">Username</label>
			<input type="text" class="form-control" id="username" name="username">
		</div>
		<div class="form-group my-3">
			<label for="title">Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<div id="formFooter" class="my-3">
		<a class="underlineHover" href="#">Forgot Password?</a>
	</div>

	@if (session('status'))
	<div class="alert alert-danger">
		{{ session('status') }}
	</div>
	@endif	
</div>	
@endsection
