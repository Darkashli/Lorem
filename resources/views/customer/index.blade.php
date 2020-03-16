@extends('template.main')

@section('title', 'Customers')

@section('content')
	<a href="/customers/create">Add New Customer</a>
	<h1>Our Customers</h1>

	<ul>
		@forelse($customers as $customer)
			<li><p><strong>{{ $customer->name }}</strong> ({{ $customer->email }})</p></li>
		@empty
			<li>No Customers to show</li>
		@endforelse 
	</ul>
@endsection
