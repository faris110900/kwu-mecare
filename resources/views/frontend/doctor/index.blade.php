@extends('frontend.master')

@section('title', 'Konseling')

@section('content')

<section id="hero-konseling" class="hero-konseling">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('assets/img/konseling.png') }}" class="img-fluid" width="600px" alt="">

            </div>
            <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <h1>Konseling</h1>
                <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                    Ceritakan apa yang kamu alami kepada psikolog Afecto.
                </p>
                <div class="section-btn">
                    <a href="#doctors" class="btn-baca-langganan scrollto">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="doctors" class="doctors">
    <div class="container">

        <h2 align="center" class="mb-3">Psikolog</h2>
        <!-- <p></p> -->

      <div class="row mt-3">

        <div class="col-lg-6">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Raju sulaeman</h4>
              <span>Psikolog</span>
              <p>Seorang Psikolog lulusan dari Sulawesi</p>
              <div class="social">
                <!-- <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a> -->
                <button type="button" class="btn btn-chat">Ceritakan Masalahmu</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('assets/img/doctors/doctors-2.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Siti Aminah</h4>
              <span>Psikolog</span>
              <p>Seorang Psikolog lulusan dari suka maju</p>
              <div class="social">
                <!-- <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a> -->
                <button type="button" class="btn btn-chat">Ceritakan Masalahmu</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('assets/img/doctors/doctors-3.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sueb Dermawan</h4>
              <span>Psikolog</span>
              <p>Seorang Psikolog lulusan dari banyu wangi</p>
              <div class="social">
                <!-- <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a> -->
                <button type="button" class="btn btn-chat">Ceritakan Masalahmu</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('assets/img/doctors/doctors-4.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Mei mei</h4>
              <span>Psikolog</span>
              <p>Seorang Psikolog lulusan dari yunani kuno</p>
              <div class="social">
                <!-- <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a> -->
                <button type="button" class="btn btn-chat">Ceritakan Masalahmu</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Doctors Section -->

@endsection