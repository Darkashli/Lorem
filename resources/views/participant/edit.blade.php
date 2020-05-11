@extends('template.main')

@section('title', 'Edit Participant')

@section('content')
    <h3>Edit Participant</h3>
    <br>
    <form action="/participants/{{ $participant->id }}" method="POST">
        @csrf

		@method('PATCH')

		@include('participant.form')

		<button class="btn btn-outline-success">Edit</button>
	</form>
@endsection
