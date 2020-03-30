@extends('template.main')

@section('title', 'Service Infomation')

@section('content')
	<h2>Service Information</h2>
	
	<div>
		<a href="/services">Back</a>
	</div>
	<br>

	<ul>
		<li>
			<h4>
				Name: {{ $service->name }}
			</h4>
		</li>
	</ul>

	<div>
		<a href="/services/{{ $service->id }}/edit">Edit</a>
		<form action="/services/{{ $service->id }}" method="POST"> 
			@method('DELETE')
			@csrf
			<button>Delete</button>
		</form>
	</div>
@endsection
