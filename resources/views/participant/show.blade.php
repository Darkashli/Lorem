@extends('template.main')

@section('title', 'Participant Details')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
         <div class="card">
            <div class="card-header">
                Actions
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="/participants">Back</a>
                <div class="row float-right mx-0">
                    <a class="btn btn-outline-success mr-1" href="/participants/{{ $participant->id }}/edit">Edit</a>
                    <form action="/participants/{{ $participant->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Participant Details
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Name: {{ $participant->name }}</li>
                <li class="list-group-item">Email: {{ $participant->email }}</li>
                <li class="list-group-item">Address: {{ $participant->address }}</li>
                <li class="list-group-item">Postal code: {{ $participant->postal_code }}</li>
                <li class="list-group-item">City: {{ $participant->city }}</li>
            </ul>
        </div>
    </div>
</div>


@endsection
