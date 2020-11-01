@extends('frontend.master')

@section('content')

<div class="card mt-3 mb-3 shadow-sm">
    <div class="card-body" align="center">
        <h1>{{ $story->title }}</h1>
        <p>
            @php
                echo $story['content'];
            @endphp
        </p>
        <div class="create" align="left">
        <small class="text-muted">{{ $story->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
    
@endsection