@extends('template.main')

@section('title', 'Edit Service')

@section('content')
	<h2>Edit Service</h2>
	<form action="/service/{{ $service->id }}" method="POST">

		@method('PATCH')

		@include('service.form')
		
		<button>Edit Service</button>
	</form>	
@endsection
