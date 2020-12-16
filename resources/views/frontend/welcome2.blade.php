<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Afecto</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

        {{-- <h1 class="logo mr-auto"><a href="{{ url('/') }}">Afecto</a></h1> --}}
        <a href="{{ url('/') }}" class="logo mr-auto">
            <img src="{{ asset('assets/img/logo-fix.png') }}" alt="" class="img-fluid">
        </a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('story-home') }}">Ceritamu</a></li>
                    <li><a href="{{ url('konseling') }}">Konseling</a></li>
                    <li><a href="{{ url('langganan') }}">Langganan</a></li>
                    <li class="drop-down"><a href="">Moodku</a>
                        <ul>
                            {{-- <li class="drop-down"><a href="#">Deep Drop Down</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="#">Drop Down 1</a></li>
                            --}}
                            <li><a href="#">Meditasi</a></li>
                            <li><a href="#">Mental Pixel</a></li>
                        </ul>
                    </li>
                    @if(Auth::check())
                    <li class="drop-down font-weight-bold"><a href=""
                        style="color: #7986BF;">{{ Auth::user()->name }}</a>
                    <ul>
                        <li><a href="{{ route('frontend.story.index') }}">My Story</a></li>
                        <li><a href="#">Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" class="text-sm text-gray-700 underline" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                
                @else
                    <a href="{{ route('login') }}" class="get-started-btn scrollto ml-2 text-white">Coba
                    bercerita</a>
                    @endif
                </ul>
            </nav><!-- .nav-menu -->




        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Platform tempatmu bercerita</h1>
                    <p class="mt-3 mb-3 text-muted" style="font-size: 20px;">Dapatkan solusi lengkap dan komprehensif
                        untuk merawat dan menjaga kesehatan
                        mentalmu. Hidup sehat mental dan bahagia tinggal selangkah lagi.</p>
                    <div class="d-flex">
                        <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
                            class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i
                                class="icofont-play-alt-2"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('assets/img/hero-1.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        {{-- <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-computer"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-image"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-tasks-alt"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section --> --}}

        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="margin-top: 100px" >
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{ asset('assets/img/berbagi-cerita.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                        <h3>Berbagi Cerita</h3>
                        <h6 class="mt-3 text-muted" style="font-size: 20px;">
                            Ceritakan semua permasalahanmu dengan aman dan nyaman lewat blog sendiri tanpa perlu
                            mengetahui siapa kamu. <br> <br>

                            Kamu hanya perlu bercerita semua permasalahanmu, curahkan semua apa yang kamu pikirkan,
                            hindari stress karena banyak pikiran yang ada dikepalamu.
                        </h6>

                        <div class="btn-group mt-3">
                            <a href="{{ url('story-home') }}" class="btn-coba scrollto">Coba Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <section id="konsultasi" class="konsultasi">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 content d-flex flex-column justify-content-center"  data-aos="fade-up" data-aos-duration="2000">
                        <h3>Konsultasi</h3>
                        <h6 class="text-muted">

                        </h6><br>
                        <h6 class="mt-3 text-muted" style="font-size: 20px;">
                            Psikolog Afecto memiliki kompetensi untuk menjawab apapun masalah psikologismu. Kamu bisa
                            bercerita tentang kecemasan, kecanduan hingga masalah percintaan.
                        </h6>
                        <div class="btn-group mt-3">
                            <a href="#about" class="btn-coba scrollto">Coba Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ asset('assets/img/konsultasi.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section>

        <section id="meditasi" class="meditasi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{ asset('assets/img/meditasi.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 content d-flex flex-column justify-content-center"  data-aos="fade-up" data-aos-duration="3000">
                        <h3>Meditasi</h3>
                        <h6 class="text-muted">

                        </h6><br>
                        <h6 class="mt-3 text-muted" style="font-size: 20px;">
                            Tahukah kamu kesehatan mental sangat dipengaruhi oleh kualitas tidurmu? Afecto dilengkapi
                            konten suara hujan, cerita tidur, sampai musik pengantar tidur.
                        </h6>
                        <div class="btn-group mt-3">
                            <a href="#about" class="btn-coba scrollto">Coba Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pixel" class="pixel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 content d-flex flex-column justify-content-center"  data-aos="fade-up" data-aos-duration="2000">
                        <h3>Meditasi</h3>
                        <h6 class="text-muted">

                        </h6><br>
                        <h6 class="mt-3 text-muted" style="font-size: 20px;">
                            Tahukah kamu kesehatan mental sangat dipengaruhi oleh kualitas tidurmu? Afecto dilengkapi
                            konten suara hujan, cerita tidur, sampai musik pengantar tidur.
                        </h6>
                        <div class="btn-group mt-3">
                            <a href="#about" class="btn-coba scrollto">Coba Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ asset('assets/img/pixel.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h3 class="mb-3">Tunggu apalagi? Yuk gunakan Afecto <br> dan saatnya kamu sehat mental</h3>
                    <a class="cta-btn mt-3" href="{{ url('login') }}">Coba Sekarang</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch"  data-aos="fade-up">
                        <div class="member">
                            <img src="{{ asset('assets/img/team/aprel.jpg') }}" alt="">
                            <h4>Apriliani Nur Afifah</h4>
                            <span>CEO</span>
                            <p>
                               "Kami tahu bahwa kami tidak tahu. Tetapi kami yakin bahwa kami mampu untuk mencari tahu"
                            </p>
                            <div class="social">
                                <a href="https://twitter.com/aprilianix"><i class="icofont-twitter"></i></a>
                                <a href="https://www.instagram.com/aprilia.ni/"><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-email"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-duration="1000">
                        <div class="member">
                            <img src="{{ asset('assets/img/team/adel.jpg') }}" alt="">
                            <h4>Adelia Nuroktaviany Wisan Putri</h4>
                            <span>COO</span>
                            <p>
                                "aspire to inspire before we expire"
                            </p>
                            <div class="social">
                                <a href="https://www.instagram.com/adelianwp/"><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch"  data-aos="fade-up" data-aos-duration="2000">
                        <div class="member">
                            <img src="{{ asset('assets/img/team/fanani.jpg') }}" alt="">
                            <h4>Achmad Fanani Aminulloh</h4>
                            <span>CMO</span>
                            <p>
                               "Teruslah Berjuang"
                            </p>
                            <div class="social">
                                <a href="https://www.instagram.com/fananisu/"><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch"  data-aos="fade-up" data-aos-duration="2000">
                        <div class="member">
                            <img src="{{ asset('assets/img/team/fadil.jpg') }}" alt="">
                            <h4>M. Fadil Muhtarom Laoegi</h4>
                            <span>Programmer</span>
                            <p>
                                "Make your Choice and You can Change the World"
                            </p>
                            <div class="social">
                                <a href="https://twitter.com/fdlml_"><i class="icofont-twitter"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100038056546205"><i class="icofont-facebook"></i></a>
                                <a href="https://www.instagram.com/fdlml_/"><i class="icofont-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/m-fadil-muhtarom-l-4778831a3/"><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch"  data-aos="fade-up" data-aos-duration="2500">
                        <div class="member">
                            <img src="{{ asset('assets/img/team/faris.jpg') }}" alt="">
                            <h4>Faris Rizqilail</h4>
                            <span>CTO</span>
                            <p>
                                "Jangan Berusaha"
                            </p>
                            <div class="social">
                                <a href="https://twitter.com/farisQLail"><i class="icofont-twitter"></i></a>
                                <a href="https://www.facebook.com/faris.r.lail/"><i class="icofont-facebook"></i></a>
                                <a href="https://www.instagram.com/farisqlail/"><i class="icofont-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/faris-rizqilail-630329194/"><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row  justify-content-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img/font.png') }}" alt="" class="img-fluid" width="400px">
                        <p>Dapatkan solusi lengkap dan komprehensif untuk merawat dan menjaga kesehatan mentalmu. Hidup
                            sehat mental dan bahagia tinggal selangkah lagi.</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Afecto</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by Afecto
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>
