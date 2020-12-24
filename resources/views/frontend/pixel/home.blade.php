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
                    <a href="#fungsi-pixel" class="btn-baca-langganan scrollto">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="fungsi-pixel" class="fungsi-pixel">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 content d-flex flex-column justify-content-center"  data-aos="fade-up" data-aos-duration="2000">
                <h3>Fungsi Mental Pixel</h3>
                <h6 class="text-muted">

                </h6><br>
                <h6 class="mt-3 text-muted" style="font-size: 20px;">
                    Luangkan sedikit waktumu untuk melakukan mood track, agar dapat mengetahui apa yang menyebabkan moodmu berantakan.
                </h6>
                <div class="btn-group mt-3">
                    <a href="{{ route('frontend.pixel.react') }}" class="btn-coba scrollto">Coba Sekarang</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="3000">
                <img src="{{ asset('assets/img/pixel-2.png') }}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>

<section id="cta" class="cta">
    <div class="container">

        <div class="text-center" data-aos="fade-up" data-aos-duration="2000">
            <h3 class="mb-3">Tunggu apalagi? Yuk gunakan Afecto <br> dan saatnya kamu sehat mental</h3>
            <a class="cta-btn mt-3" href="{{ url('login') }}">Coba Sekarang</a>
        </div>

    </div>
</section>


@endsection