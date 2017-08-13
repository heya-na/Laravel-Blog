@extends('layouts.layout')

@section('content')
<div class="col-sm-8 blog-main">
	<h1>Register</h1>

	<form method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" id="name">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control" id="email">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Register</button>
		</div>
	</form>
</div>
@endsection