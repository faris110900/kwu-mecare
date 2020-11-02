@extends('frontend.master')

@section('content')

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between">
                    <h3 class="mb-0">Card tables</h3>

                    <a href="{{ route('frontend.story.create') }}" class="btn btn-primary">Create Story</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Banner</th>
                                <th scope="col">Content</th>
                                <th scope="col">Created_at</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stories as $story)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <span>{{ $story->id }}</span>
                                            {{-- <a href="#"
                                                class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">Argon Design System</span>
                                            </div> --}}
                                        </div>
                                    </th>
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
                    </table>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="card mt-3 mb-3 shadow-sm">
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
                                <img src="{{ asset('storage/' . $story->image) }}" height="90px">
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
                                <a href="{{ route('frontend.story.edit', $story) }}" class="ml-1 text-success"><i
                                        class="fas fa-edit fa-2x"></i></a>
                                <a href="{{ route('frontend.story.delete', $story->id) }}" class="ml-1 text-danger"><i
                                        class="fas fa-trash fa-2x"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

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
