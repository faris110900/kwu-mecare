@extends('admin.master')

@section('title-admin', 'Tambah Data')

@section('content-admin')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.faktor.update', $faktor) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="">Nama Faktor</label>
                  <input type="text" class="form-control" name="name" value="{{ $faktor->name }}" autocomplete="off">
                </div>

                <button class="btn btn-primary" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>
    
@endsection