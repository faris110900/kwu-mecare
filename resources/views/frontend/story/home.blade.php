@extends('frontend.master')

@section('content')

<section id="hero-ceritamu" class="hero-ceritamu">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('assets/img/ceritamu.png') }}" class="img-fluid" width="600px" alt="">
                
            </div>
            <div class="col-lg-6 mt-3 pt-5 pt-lg-0  d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                <h1>Cerita teman-teman</h1>
                <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">
                    Baca cerita teman-teman kita untuk memberi perhatian untuk teman-teman sesama kita. 
                </p>
            </div>
        </div>
    </div>
    <hr>
</section>


    <section id="ceritamu" class="ceritamu">
        <div class="container">

        </div>

    </section>
    
@endsection