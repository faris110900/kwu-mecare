@extends('admin.master')

@section('title-admin', 'Tambah Data Emosi')

@section('content-admin')

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('frontend.emosi.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="">Nama Emosi</label>
                      <input type="text" class="form-control" name="name" autocomplete="off">
                    </div>

                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection