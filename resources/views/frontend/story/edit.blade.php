@extends('frontend.master')

@section('title', 'Edit Ceritaku')

@section('content')

<section id="edit-story" class="edit-story">
    <div class="mt-3 mb-3">
        <h2><b>Edit Cerita</b></h2>
        <form action="{{ route('frontend.story.update', $story) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="">Judul Cerita</label>
                <input type="text" name="title" class="form-control" value="{{ $story->title }}">
            </div>

            <div class="form-group">
                <label for="">Ceritakan semua disini</label>
                <textarea name="content">{{ $story->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Thumbnail Cerita</label>
                <input type="file" class="form-control-file" name="image">
            </div>

            <div align="right">
                <button class="btn btn-edit" value="save" type="submit">Upload</button>
            </div>
        </form>
    </div>
</section>


@endsection

@push('footer-scripts')
    <script>
        CKEDITOR.replace('content');

    </script>
@endpush
