@extends('frontend.master')

@section('title', 'Langganan')

@section('content')

<section id="hero-langganan" class="hero-langganan">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('assets/img/ceritamu.png') }}" class="img-fluid" width="600px" alt="">

            </div>
            <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <h1>Berlangganan</h1>
                <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                    Dapatkan akses lebih dengan cara berlanganan dengan MeCare.
                </p>
            </div>
        </div>
    </div>
    <hr>
</section>

<section id="langganan-conten" class="langganan-content">
    <div class="container">
        <div class="langganan-title" align="center" data-aos="fade-up" data-aos-duration="2000">
            <h2>Langganan</h2>
        </div>

        

    </div>

</section>
    
@endsection
    