@extends('frontend.master')

@section('title', 'Ceritaku')

@section('content')
{{-- {{ $react }} --}}

    <section id="my-story" class="my-story">
        <div class="container mt-3 d-flex justify-content-center">
            <img src="https://bigheads.io/svg?accessory=roundGlasses&body=chest&circleColor=blue&clothing=dressShirt&clothingColor=white&eyebrows=angry&eyes=simple&faceMask=true&faceMaskColor=red&facialHair=stubble&graphic=react&hair=short&hairColor=brown&hat=beanie&hatColor=black&lashes=true&lipColor=purple&mask=false&mouth=lips&skinTone=brown"
                class="align-self-center mr-3" alt="Profile" />
        </div>

        <div class="container mt-3 content" align="center">
            <h3 class="mt-3">{{ Auth::user()->name }}</h3>
            <p><i>"Jangan Berusaha"</i></p>

            <a href="{{ route('frontend.story.create') }}" class="btn btn-create mb-3">Buat Ceritaku</a>
        </div>

        <div class="container mt-3">
            <hr class="mt-3">
        </div>

    </section>

    @foreach ($stories as $story)
        <section id="story-profile" class="story-profile">
            <div class="container">
                <div class="img" align="center">
                    <img src="{{ asset('storage/' . $story->image) }}" width="700px" class="img-fluid" alt="" srcset="">
                </div>
                <div class="content-story">
                    <a href="{{ route('frontend.story.show', $story) }}" class="title-link">
                        <h2 class="mt-3 pt-3" align="left"><b>
                                {{ $story->title }}
                            </b></h2>
                    </a>
                    <p class=" text-left" align="left">
                        {!! Str::limit($story->content, 400) !!}
                    </p>
                    <div class="share">
                        <div class="row">
                            <div class="col-lg-6" align="left">
                                <a href="{{ route('frontend.story.show', $story) }}">Read more</a>
                                <span class="text-muted ml-2"><i>{{ $story->created_at->diffForHumans() }}</i></span>
                            </div>
                            <div class="col-lg-6" align="right">
                                <div class="dropdown">
                                    <a class="btn " role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fas fa-ellipsis-v" style="color: #008a63;"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('frontend.story.edit', $story) }}">Edit
                                            Cerita</a>
                                        <a class="dropdown-item"
                                            href="{{ route('frontend.story.delete', $story->id) }}">Hapus Cerita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    {{-- <div class="row">
        <div class="col">
            <div class="card shadow p-3">
                <div class="card-header border-0 d-flex justify-content-between">
                    <h3 class="mb-0">Card tables</h3>

                    <a href="{{ route('frontend.story.create') }}" class="btn btn-primary">Create Story</a>
                </div>
                <div class="table-responsive">
                    <table id="storyTable" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Banner</th>
                                <th>Content</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stories as $story)
                                <tr>
                                    <td>
                                        <h4>{{ $story->title }}</h4>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $story->image) }}" height="90px">
                                    </td>
                                    <td>
                                        @php
                                        echo Str::limit($story->content, 20);
                                        @endphp
                                    </td>
                                    <td>
                                        {{ $story->created_at->diffForHumans() }}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.story.edit', $story) }}">Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.story.delete', $story->id) }}">Delete</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('frontend.story.show', $story) }}">Show</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Banner</th>
                                <th>Content</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
{{--
@push('scripts')
<script>
    $(document).ready(function() {
        $('#storyTable').DataTable();
    });

</script>
@endpush --}}
