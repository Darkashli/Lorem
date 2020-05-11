@extends('template.main')

@section('title', 'Notifications')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">New Notifications</div>
                <div class="card-body">
                    <div class="form-group">
                        <ul>
                            @forelse ($notifications as $key => $notification)
                                <li>
                                    {{ $notification }}
                                </li>
                            @empty
                                <li>There is no notification</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

