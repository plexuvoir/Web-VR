@extends('app')

@section('content')
<div id="formContent" class="container">					
	<form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
		@csrf
		<div class="form-group">
			<label for="title">Username</label>
			<input type="text" class="form-control" id="username" name="username">
		</div>
		<div class="form-group">
			<label for="title">Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<div id="formFooter">
		<a class="underlineHover" href="#">Forgot Password?</a>
	</div>
</div>	
@endsection
