@extends('frontend.master')

@section('title', 'Mental Pixel')

@section('content')
    
<section id="hero-pixel" class="hero-pixel">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('assets/img/bicycle.png') }}" class="img-fluid" width="600px" alt="">

            </div>
            <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <h1>Mental Pixel</h1>
                <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                    Membantumu untuk mentrack mood harianmu dan memberimu saran untuk menjaga kesehatan mentalmu.
                </p>
                <div class="section-btn">
                    <a href="#pricing" class="btn-baca-langganan scrollto">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection