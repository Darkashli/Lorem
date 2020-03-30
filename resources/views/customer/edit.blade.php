@extends('template.main')

@section('title', 'Edit Customer')

@section('content')
	<h2>Edit Customer</h2>
	<form action="/customers/{{ $customer->id }}" method="POST">

		@method('PATCH')

		@include('customer.form')
		
		<button>Edit Customer Details</button>
	</form>	
@endsection
