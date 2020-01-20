@extends('template.main')

@section('title', 'Notifications')

@section('content')
	<ul>
		@forelse ($messages as $key => $message)
			<li>
				{{ $message }}
			</li>
		@empty
			<li>There is no notification</li>	
		@endforelse
	</ul>  
@endsection