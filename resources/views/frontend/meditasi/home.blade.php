@extends('frontend.master')

@section('title', 'Meditasi')

@section('content')

<section id="hero-langganan" class="hero-langganan">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('assets/img/meditasi.png') }}" class="img-fluid" width="600px" alt="">

            </div>
            <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <h1>Meditasi</h1>
                <h6 class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                    Tahukah kamu kesehatan mental sangat dipengaruhi oleh kualitas tidurmu? Afecto dilengkapi konten suara hujan, cerita tidur, sampai musik pengantar tidur.
                </h6>
                <div class="section-btn">
                    <a href="#pricing" class="btn-baca-langganan scrollto">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-donate-heart"></i></div>
            <h4 class="title">
                Diri Lebih tenang
            </h4>
            <p class="description">
                Tenangkan diri dengan mendengarkan alunan instrumen.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-heart"></i></div>
            <h4 class="title">
              Emosi terkontrol
            </h4>
            <p class="description">
              Emosi dapat lebih terkontrol dengan bermeditasi.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section id="fungsi-pixel" class="fungsi-pixel">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 content d-flex flex-column justify-content-center"  data-aos="fade-up" data-aos-duration="2000">
                <h3>Fungsi Meditasi</h3>
                <h6 class="text-muted">

                </h6><br>
                <h6 class="mt-3 text-muted" style="font-size: 20px;">
                  Dengan Meditasi kamu lebih bisa mengontrol emosi dan pikiranmu untuk jauh lebih tenang.
                </h6>
                <div class="btn-group mt-3">
                    <a href="{{ url('/meditasi-list') }}" class="btn-coba scrollto">Coba Sekarang</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="3000">
                <img src="{{ asset('assets/img/yoga.png') }}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>

@endsection