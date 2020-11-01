@extends('frontend.master')

@section('content')

    <div class="card mt-3 mb-3 shadow-sm">
        <div class="card-body">
            <h2>Edit your story</h2>
            <form action="{{ route('frontend.story.update', $story) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $story->title }}">
                </div>

                <div class="form-group">
                    <label for="">Tell me your story</label>
                    <textarea name="content">{{ $story->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Select again your tory thumbnail <span class="text-danger">*</span> </label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div align="right">
                    <button class="btn btn-primary" value="save" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>


@endsection

@push('footer-scripts')
    <script>
        CKEDITOR.replace('content');

    </script>
@endpush

