@extends('template.main')

@section('title', 'Dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Dashboard
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <a class="btn btn-primary my-0" href="/questionnaires/create">New Questionnaire</a>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">My Questionnaires</div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($questionnaires as $questionnaire)
                            <li class="list-group-item">
                                <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>

                                <div class="mt-1">
                                    <small class="font-weight-bold"> Share URL</small>
                                    <div class="row justify-content-between mx-0">
                                        <a href="{{ $questionnaire->publicPath() }}">
                                            {{ $questionnaire->publicPath() }}
                                        </a>

                                        <form action="/questionnaires/{{ $questionnaire->id }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-sm btn-outline-danger float-right">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li><br>
                            @empty
                               <li class="list-group-item">No Questionnaires available</li>
                            @endforelse
                    </ul>
                </div>
        </div>
    </div>
</div>

@endsection
