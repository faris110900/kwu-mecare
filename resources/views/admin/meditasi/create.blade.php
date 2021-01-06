@extends('admin.master')

@section('title-admin', 'Tambah Data')

@section('content-admin')

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('frontend.meditasi.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Instrumen</label>
                        <input type="text" class="form-control" name="name" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Singkat</label>
                        <input type="text" class="form-control" name="deskripsi" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="">Foto Instrumen</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="">Instrumen</label>
                        <input type="file" class="form-control-file" name="instrumen">
                    </div>

                    <div class="btn-tambah" align="right">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
