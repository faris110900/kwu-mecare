<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Checkout
    </title>

    @include('frontend.include._header-script')

</head>

<body>

    <section id="checkout" class="checkout">
        <div class="caption">
            <h1 align="center">Checkout</h1>
            <p align="center">
                Pilih metode pembayaranmu dan dapatkan paket yang kamu inginkan.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        {{-- <span class="advanced">Advanced</span>
                        --}}
                        <h3>Paket Primero</h3>
                        {{-- <h4><sup>Rp.</sup>100k<span>/2 Minggu</span></h4>
                        --}}
                        <ul>
                            <li>Berbagi Cerita<span></span></li>
                            <li>Konsultasi</li>
                            <li>Meditasi</li>
                            <li>Mental Pixel</li>
                            <hr>
                            <li>
                                <div class="d-flex bd-highlight" style="margin-top: -10px;">
                                    <div class="mr-auto p-2 bd-highlight">
                                        <span style="color: #444444"><b>Harga :</b></span>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <span>Rp. 100.000</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight" style="margin-top: -15px;">
                                    <div class="mr-auto p-2 bd-highlight">
                                        <span style="color: #444444"><b>Biaya Admin :</b></span>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <span>Rp. 5000</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight" style="margin-top: -15px;">
                                    <div class="mr-auto p-2 bd-highlight">
                                        <span style="color: #444444"><b>Total :</b></span>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <span>Rp. 105.000</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header" style="background-color: #7986BF;">
                            <h3 class="text-center text-white">Data Diri</h3>
                        </div>
                        <div class="card-body">

                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>No Telp.</label>
                                    <input type="tel" class="form-control" placeholder="08000...">
                                </div>

                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ovo" value="option1">
                                                <label class="form-check-label" for="">
                                                    <img src="{{ asset('assets/img/ovo.png') }}" width="70px">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input mt-2" type="radio" name="gopay" value="option2">
                                                <label class="form-check-label" for="">
                                                    <img src="{{ asset('assets/img/gopay.png') }}" width="90px">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" align="right">
                                    <a href="{{ url('success-checkout') }}" class="btn btn-checkout" value="save">Bayar</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.include._footer-script')
    @stack('scripts')
</body>
