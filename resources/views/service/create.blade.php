@extends('template.main')

@section('title', 'New Service')

@section('content')
	<h2>New Service</h2>
	<form action="/services" method="POST">

		@include('service.form')

		<button>Add New Service</button> 
	</form>	
@endsection
