@extends('layouts.app')

@section('title', 'Verifikasi Email')

    <style>
        .verif-section h2 {
            margin-top: 10;
            font-size: 25px;
            font-weight: 700;
            line-height: 56px;
            color: #3e4450;
        }

        #verif-section .btn-verif {
            background: #7986BF;
            display: inline-block;
            padding: 8px 35px 10px 35px;
            border-radius: 50px;
            color: #fff;
            transition: none;
            font-size: 14px;
            font-weight: 400;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            transition: 0.3s;
        }

        #verif-section .btn-verif:hover {
            background: #008a63;
        }

    </style>

@section('content')

    <section id="verif-section" class="verif-section">
        <div class="container">
            <div class="ilus" align="center">
                <img src="{{ asset('assets/img/success.gif') }}" width="400px" class="img-fluid" alt="">
                <h2>Pembelian Paket Success</h2>
                <p>Selamat menikmati paket yang kamu pilih.</p>
                <a href="{{ url('/') }}" class="btn btn-verif mt-3">Kembali ke Home</a>
            </div>

        </div>
    </section>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
