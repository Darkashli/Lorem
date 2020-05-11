@extends('template.main')

@section('title', 'Participants')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Actions
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="/participants/create">Add a new participant</a>
                <div class="float-right">
                    <a class="btn btn-outline-primary" href="/participants?active=1">Active</a>
                    <a class="btn btn-outline-primary" href="/participants?active=0">Inactive</a>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                Our Participants
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @forelse($participants as $participant)
                        <li class="list-group-item">
                            <a href="{{ $participant->path() }}">{{ $participant->name }}</a>
                        </li>
                    @empty
                        <li class="list-group-item">No Participants to show</li>
                    @endforelse
	            </ul>
            </div>
        </div>
    </div>
</div>

@endsection
