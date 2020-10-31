@extends('frontend.master')

@section('content')

    <div class="card mt-3 mb-3 shadow-sm">
        <div class="card-body">
            <h2>Create your story</h2>
        <form action="{{ route('frontend.story.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="*my first story ...">
                </div>

                <div class="form-group">
                    <label for="">Tell me your story</label>
                    <textarea name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Story thumbnail</label>
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
