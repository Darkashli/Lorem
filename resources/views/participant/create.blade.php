@extends('template.main')

@section('title', 'New Participant')

@section('content')
    <h3>New Participant</h3>
    <br>
    <form action="/participants" method="POST">
        @csrf

		@include('participant.form')

		<button type="submit" class="btn btn-primary mb-2">Add New Participant</button>
    </form>
@endsection
