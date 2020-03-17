@extends('template.main')

@section('title', 'Customers')

@section('content')
	<h2>Customer Details</h2>
	
	<div>
		<a href="/customers">Back</a>
	</div>
	<br>

	<ul>
		<li>
			<h4>
				Name: {{ $customer->name }}
			</h4>
		</li>
		<li>
			<h4>
				E-mail: {{ $customer->email }}
			</h4>
		</li>
	</ul>

	<div>
		<a href="/customers/{{ $customer->id }}/edit">Edit</a>
		<form action="/customers/{{ $customer->id }}" method="POST"> 
			@method('DELETE')
			@csrf
			<button>Delete</button>
		</form>
	</div>
@endsection
