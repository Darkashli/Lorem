@extends('template.main')

@section('title', 'New Survey')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <h3>{{ $questionnaire->title }}</h3>

        <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="POST">
            @csrf

            @include('survey.form')
        </form>
    </div>
</div>
@endsection
