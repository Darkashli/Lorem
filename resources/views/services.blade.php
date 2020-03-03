@extends('template.main')

@section('title', 'Services')

@section('content')
	<ul>
		@forelse($services as $service)
			<li>{{ $service->name }}</li>
		@empty
			<li>No service available.</li>
		@endforelse
	</ul>
@endsection