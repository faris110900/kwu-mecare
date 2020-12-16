@extends('frontend.master')

@section('title', 'Buat ceritaku')

@section('content')

    <section id="create-story" class="create-story">
        <div class="mt-3 mb-3">
            <h2 class="mb-3"><b>Buat Ceritamu</b></h2>
            <form action="{{ route('frontend.story.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mt-3">
                    <label for="">Judul Cerita</label>
                    <input type="text" name="title" class="form-control" placeholder="Judul Cerita ..." autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="">Ceritakan semua disini</label>
                    <textarea name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Thumbnail Cerita</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div align="right">
                    <button class="btn btn-create" value="save" type="submit">Upload</button>
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
