@extends('template.main')

@section('title', 'Customers')

@section('content')
	<h2>Our Customers</h2>
	<a href="/customers/create">Add New Customer</a>
    <a href="/customers?active=1">Active</a>
	<a href="/customers?active=0">Inactive</a>
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
