@extends('template.main')

@section('title', 'Services')

@section('content')
	<h2>Welcome to our Service support</h2>
	<a href="/services/create">Add New Service</a>
	<br><br>

	<table>
		
	</table>
	<ul>
		@forelse($services as $service)
			<li><p>
				<strong>
					<a href="/services/{{ $service->id }}">{{ $service->name }}</a>
				</strong>
			</p></li>
		@empty
			<li>No Services available</li>
		@endforelse
	</ul>
@endsection