@extends('template.main')

@section('title', 'Services')

@section('content')
	<h1>Welcome to our Service support</h1>

	<form action="/service" method="POST">
		<input type="text" name="name" autocomplete="off">
		@csrf
		<button>Submit</button>
	</form>
	<p style="color: red;">@error('name') {{ $message }} @enderror</p>
	<br>

	<ul>
		@forelse($services as $service)
			<li>{{ $service->name }}</li>
		@empty
			<li>No services available</li>
		@endforelse
	</ul>
@endsection