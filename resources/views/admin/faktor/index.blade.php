@extends('admin.master')

@section('title-admin', 'Data Faktor')

@section('content-admin')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="button mb-3" align="right">
                <a href="{{ route('frontend.faktor.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <table id="table-faktor" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faktor as $fk)
                        <tr>
                            <td>{{ $fk->name }}</td>
                            <td>
                                <a class="btn btn-success"
                                        href="{{ route('frontend.faktor.edit', $fk) }}">Edit</a>
                                    <a class="btn btn-danger"
                                        href="{{ route('frontend.faktor.delete', $fk->id) }}">Delete</a>
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
            $('#table-faktor').DataTable();
        });

    </script>
@endpush
