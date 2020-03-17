@extends('template.main')

@section('title', 'New Customer')

@section('content')
	<h1>Edit Customer</h1>
	<form action="/customers/{{ $customer->id }}" method="POST">

		@method('PATCH')

		@include('customer.form')
		
		<button>Edit Customer Details</button>
	</form>	
@endsection
