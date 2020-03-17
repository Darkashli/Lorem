@extends('template.main')

@section('title', 'Customers')

@section('content')
	<h1>Our Customers</h1>
	<a href="/customers/create">Add New Customer</a>
	<br><br>
	<ul>
		@forelse($customers as $customer)
			<li><p>
				<strong>
					<a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
				</strong>
				({{ $customer->email }})
			</p></li>
		@empty
			<li>No Customers to show</li>
		@endforelse 
	</ul>
@endsection
