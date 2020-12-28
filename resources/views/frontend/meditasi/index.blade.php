@extends('frontend.master')

@section('title', 'Meditasi')

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

<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
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

@endsection