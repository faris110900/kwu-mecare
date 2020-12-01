@extends('frontend.master')

@section('content')

    <section id="hero-ceritamu" class="hero-ceritamu">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/ceritamu.png') }}" class="img-fluid" width="600px" alt="">

                </div>
                <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-duration="1500">
                    <h1>Cerita teman-teman</h1>
                    <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                        Baca cerita teman-teman kita untuk memberi perhatian untuk teman-teman sesama kita.
                    </p>
                </div>
            </div>
        </div>
        <hr>
    </section>


    <section id="ceritamu" class="ceritamu">
        <div class="container">
            <div class="row">
                @foreach ($stories as $story)
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="img">
                        <img src="{{ asset('storage/' . $story->image) }}"
                            class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="content-story">
                            <a href="{{ route('frontend.story.show', $story) }}" class="title-link">
                                <h2 class="mt-3 pt-3" align="left"><b>
                                        {{ $story->title }}
                                    </b></h2>
                            </a>
                            <p class="mt-3 pt-3 text-left" align="left">
                                {!! Str::limit($story->content, 400) !!}
                            </p>
                            <div class="share">
                                <div class="row">
                                    <div class="col-lg-6" align="left">
                                        <a href="{{ route('frontend.story.show', $story) }}">Read more</a>
                                        <span
                                            class="text-muted ml-2"><i>{{ $story->created_at->diffForHumans() }}</i></span>
                                    </div>
                                    <div class="col-lg-6" align="right">
                                        <a href="https://twitter.com/share?url={{ $story->title }}&text={!! $story->content !!}">
                                            <i class="fab fa-telegram-plane"></i>
                                        </a>
                                        {{-- <div class="dropdown">
                                            <a class="btn " role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-v" style="color: #008a63;"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.story.edit', $story) }}">Edit
                                                    Cerita</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.story.delete', $story->id) }}">Hapus Cerita</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

    </section>

@endsection
