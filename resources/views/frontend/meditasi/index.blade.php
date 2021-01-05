@extends('frontend.master')

@section('title', 'Instrumen Meditasi')

@section('content')

    <section id="meditasi-instrumen" class="meditasi-instrumen">
        <div class="container">
            <h3>Suara Kegelapan</h3>

            <div class="row">
                <div classs="col-lg-4">
                    <div class="card ml-3">
                        <img src="{{ asset('assets/img/meditasi/2.jpg') }}" class="img-fluid">
                        <div class="card-body">
                            <h5>Nuansa Malam</h5>
                        </div>
                    </div>
                </div>
                <div classs="col-lg-4">
                    <div class="card ml-3">
                        <img src="{{ asset('assets/img/meditasi/3.jpg') }}" class="img-fluid">
                        <div class="card-body">
                            <h5>Nuansa Api Unggun</h5>
                        </div>
                    </div>
                </div>
                <div classs="col-lg-4">
                    <div class="card ml-3">
                        <img src="{{ asset('assets/img/meditasi/4.jpg') }}" class="img-fluid">
                        <div class="card-body">
                            <h5>Nuansa Angin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <h3 style="margin-top: 40px;">
                Suara Binatang
            </h3>
            
            <div class="row">
                <div classs="col-lg-4">
                    <div class="card ml-3">
                        <img src="{{ asset('assets/img/meditasi/2.jpg') }}" class="img-fluid">
                        <div class="card-body">
                            <h5>Nuansa Malam</h5>
                        </div>
                    </div>
                </div>
                <div classs="col-lg-4">
                    <div class="card ml-3">
                        <img src="{{ asset('assets/img/meditasi/3.jpg') }}" class="img-fluid">
                        <div class="card-body">
                            <h5>Nuansa Api Unggun</h5>
                        </div>
                    </div>
                </div>
                <div classs="col-lg-4">
                    <div class="card ml-3">
                        <img src="{{ asset('assets/img/meditasi/4.jpg') }}" class="img-fluid">
                        <div class="card-body">
                            <h5>Nuansa Angin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
