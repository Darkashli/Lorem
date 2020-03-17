@extends('template.main')

@section('title', 'Services')

@section('content')
	<h2>Welcome to our Service support</h2>
	<br>
	<form action="/services" method="POST">
		<input type="text" name="name" autocomplete="off">
		@csrf
		<button>Submit</button>
	</form>
	@error('name') <p style="color: red;">{{ $message }}</p> @enderror
	<br>

	<ul>
		@forelse($services as $service)
			<li>{{ $service->name }}</li>
		@empty
			<li>No Services available</li>
		@endforelse
	</ul>
@endsection