@extends('frontend.master')

@section('content')

    <div class="card mt-3 mb-3 shadow-sm">
        <div class="card-body">
            <div class="ml-auto mb-3">
                <a href="{{ route('frontend.story.create') }}" class="btn btn-primary">Create Story</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Content</th>
                        <th scope="col">Create At</th>
                        <th scope="col">Action</th>git
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stories as $story)
                        <tr>
                            <td>{{ $story->title }}</td>
                            <td>
                                @php
                                echo $story['content'];
                                @endphp
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

{{-- @push('scripts')
    <script>
        $(function () {
            $('#table-story').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'story/json',
                columns: [
                   {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'content',
                        name: 'content'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    }
                ]
            });
        });

    </script>
@endpush --}}
