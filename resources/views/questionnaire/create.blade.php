@extends('template.main')

@section('title', 'New Questionnaire')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Create a New Questionnaire
            </div>

            <div class="card-body">
                <form action="/questionnaires" method="POST">
                    @csrf

                    @include('questionnaire.form')

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
