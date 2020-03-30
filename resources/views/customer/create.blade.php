@extends('template.main')

@section('title', 'New Customer')

@section('content')
	<h2>New Customer</h2>
	<form action="/customers" method="POST">

		@include('customer.form')

		<button>Add New Customer</button> 

	</form>	
@endsection
