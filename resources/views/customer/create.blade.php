@extends('template.main')

@section('title', 'New Customer')

@section('content')
	<h1>New Customer</h1>
	<form action="/customers" method="POST">

		@include('customer.form')

		<button>Add New Customer</button> 

	</form>	
@endsection
