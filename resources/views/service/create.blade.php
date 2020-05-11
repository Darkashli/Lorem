@extends('template.main')

@section('title', 'New Service')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                New Service
            </div>

            <div class="card-body">
                <form action="/services" method="POST">
                    @csrf

                    @include('service.form')

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

