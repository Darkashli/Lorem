@extends('template.main')

@section('title', 'Services')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Welcome to our Services support</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/services/create">New Service</a>
                </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">Our Services</div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($services as $service)
                            <li class="list-group-item">
                                <div class="row justify-content-between m-0">
                                    {{ $service->service }}

                                     <form action="/services/{{ $service->id }}" method="post">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-outline-danger float-right">Delete</button>
                                    </form>
                              </div>
                            </li>
                        @empty
                            <li class="list-group-item">No Services available</li>
                        @endforelse
                    </ul>
                </div>
        </div>
    </div>
</div>

@endsection
