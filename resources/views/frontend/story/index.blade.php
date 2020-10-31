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
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection
