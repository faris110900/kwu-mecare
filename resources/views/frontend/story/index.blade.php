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
                        <th scope="col">Title</th>
                        <th scope="col">Banner</th>
                        <th scope="col">Content</th>
                        <th scope="col">Create At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stories as $story)
                        <tr>
                            <td>{{ $story->id }}</td>
                            <td> 
                                <img src="{{ asset('storage/'.$story->image) }}" height="90px">
                            </td>
                            <td>{{ $story->title }}</td>
                            <td>
                                @php
                                    echo Str::limit($story->content, 20);
                                @endphp
                            </td>
                            <td>{{ $story->created_at->diffForHumans() }}</td>
                            <td>
                            <a href="{{ route('frontend.story.show', $story) }}"><i class="fas fa-eye fa-2x"></i></a>
                            <a href="{{ route('frontend.story.edit', $story) }}" class="ml-1 text-success"><i class="fas fa-edit fa-2x"></i></a>
                            <a href="{{ route('frontend.story.delete', $story->id) }}" class="ml-1 text-danger"><i class="fas fa-trash fa-2x"></i></a>
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
    $(function() {
        $('#table-story').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'story/json',
            columns: [{
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
