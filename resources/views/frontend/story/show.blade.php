@extends('frontend.master')

@section('title', $story->title)

@section('content')

    <section id="show-story" class="show-story mt-3">
        <div class="container mt-3 mb-3">
            <div class="img" align="center">
                <img src="{{ asset('storage/' . $story->image) }}" class="img-fluid" alt="">
            </div>
            <h1>{{ $story->title }}</h1>
            <p>
                {!! $story->content !!}
            </p>
            <div class="create">
                <div class="row">
                    <div class="col-lg-6">
                        <small class="text-muted">{{ $story->created_at->diffForHumans() }}</small>
                    </div>
                    <div class="col-lg-6" align="right">
                        <span class="text-muted"><strong>Share :</strong> &nbsp; <a href="https://twitter.com/share?url={{ $story->title }}&text={!! $story->content !!}" target="blank" class="ml-3">
                            <i class="fab fa-telegram-plane fa-2x"></i>
                        </a></span>
                    </div>
                </div>
            </div>

            <h2 align="center">Apa tanggapanmu ?</h2>
            <div class="react" align="center">
                <form action="{{ route('frontend.react.store') }}" method="post">
                    {{-- {{ $react }} --}}
                    {{ csrf_field() }}
                    <input class="form-control" type="hidden" name="story_id" value="{{ $story->id }}">

                    <button type="submit" name="react_happy" value="react_happy" class="btn-react" style="border:none; background: none;">
                        <i class="far fa-smile-wink fa-3x"></i>
                    </button>
                    
                    <button type="submit" name="react_sad" value="react_sad"  class="btn-react" style="border:none; background: none;">
                        <i class="far fa-frown-open fa-3x ml-3"></i>
                    </button>
                    
                    <button type="submit" name="react_cry" class="btn-react" value="react_cry" style="border:none; background: none;">
                        <i class="far fa-sad-tear fa-3x ml-3"></i>
                    </button>
                    
                </form>
            </div>
            {{-- <livewire:react-post /> --}}
        </div>
    </section>

@endsection

