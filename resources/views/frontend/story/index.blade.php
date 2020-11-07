@extends('frontend.master')

@section('content')
    <div class="row">
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
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#storyTable').DataTable();
        });

    </script>
@endpush
