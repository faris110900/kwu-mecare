@extends('frontend.master')

@section('content')

    <div class="card mt-3 mb-3 shadow-sm">
        <div class="card-body">
            <h2>Create your story</h2>
            <form action="">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="*my first story ...">
                </div>

                <div class="form-group">
                    <label for="">Tell me your story</label>
                    <textarea name="content"></textarea>
                </div>

            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
