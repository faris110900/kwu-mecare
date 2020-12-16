@extends('frontend.master')

@section('title', 'Langganan')

@section('content')

    <section id="hero-langganan" class="hero-langganan">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/pixel.png') }}" class="img-fluid" width="600px" alt="">

                </div>
                <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-duration="1500">
                    <h1>Berlangganan</h1>
                    <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                        Dapatkan akses lebih dengan cara berlanganan dengan Afecto.
                    </p>
                    <div class="section-btn">
                        <a href="#pricing" class="btn-baca-langganan scrollto">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        {{-- <div class="container">
            <div class="langganan-title" align="center" data-aos="fade-up" data-aos-duration="2000">
                <h2>Langganan</h2>
            </div> --}}

            <section id="pricing" class="pricing">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Langganan</h2>
                    </div>

                    <div class="row d-flex justify-content-center" data-aos="fade-left">

                        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                                <h3>Free</h3>
                                <h4><sup>Rp.</sup>0<span></span></h4>
                                <ul>
                                    <li>Berbagi Cerita</li>
                                    <li>Konsultasi</li>
                                    <li class="na">Meditasi</li>
                                    <li class="na">Mental Pixel</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{ route('login') }}" class="btn-buy">Daftar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                            <div class="box" data-aos="zoom-in" data-aos-delay="400">
                                <span class="advanced">Advanced</span>
                                <h3>Ultimate</h3>
                                <h4><sup>Rp.</sup>200.000<span>/Bulan</span></h4>
                                <ul>
                                    <li>Berbagi Cerita</li>
                                    <li>Konsultasi</li>
                                    <li>Meditasi</li>
                                    <li>Mental Pixel</li>
                                </ul>
                                <div class="btn-wrap">
                                    @if (Auth::check())
                                        <a href="#" class="btn-buy">Beli</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn-buy">Beli</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Pricing Section -->

        </div>

@endsection
