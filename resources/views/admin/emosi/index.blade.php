@extends('admin.master')

@section('title-admin', 'Data Emosi')

@section('content-admin')

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="button mb-3" align="right">
                    <a href="{{ route('frontend.emosi.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <table id="table-emosi" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emosi as $emo)
                            <tr>
                                <td>{{ $emo->name }}</td>
                                <td>
                                    <a class="btn btn-success"
                                            href="{{ route('frontend.emosi.edit', $emo) }}">Edit</a>
                                        <a class="btn btn-danger"
                                            href="{{ route('frontend.emosi.delete', $emo->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table-emosi').DataTable();
        });

    </script>
@endpush
