@extends('template.main')

@section('title', 'New Question')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Create New Question
            </div>

            <div class="card-body">
                <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="POST">
                    @csrf

                    @include('question.form')

                    <button type="submit" class="btn btn-primary my-2">Add Question</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
