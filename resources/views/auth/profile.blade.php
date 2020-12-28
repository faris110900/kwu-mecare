@extends('frontend.master')

@section('title', 'My Profile')

@section('content')

    <section id="my-profile" class="my-profile">

        <div class="container mt-3">
            <div class="row">

                <div class="col-lg-6">
                    <div class="media">
                        <img src="https://bigheads.io/svg?accessory=roundGlasses&body=chest&circleColor=blue&clothing=dressShirt&clothingColor=white&eyebrows=angry&eyes=simple&faceMask=true&faceMaskColor=red&facialHair=stubble&graphic=react&hair=short&hairColor=brown&hat=beanie&hatColor=black&lashes=true&lipColor=purple&mask=false&mouth=lips&skinTone=brown"
                            class="align-self-center mr-3" alt="...">
                        <div class="media-body ml-3">
                            <h1 class="mt-0">{{ Auth::user()->name }}</h1>
                            <p><i>"Jangan Berusaha"</i></p>

                            <a href="" class="btn btn-create mb-3">Edit Profile</a>
                            <a href="{{ route('frontend.pixel.index') }}" class="btn btn-statis mb-3">Statisku</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 d-flex flex-column justify-content-center">
                    <div class="card card-stats card-ceritaku mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Ceritaku</h5>
                                    <span class="h2 font-weight-bold mb-0" style="color: #444444;">
                                        2
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Since last month</span>
                               
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 d-flex flex-column justify-content-center">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Mood Hari ini</h5>
                                    <span class="h4 font-weight-bold mb-0">
                                        @if (isset($y[0]['sangat_buruk']) && $y[0]['sangat_buruk'] != '' )
                                            {{ $y[0]['sangat_buruk'] }}
                                        @elseif(isset($y[0]['buruk']) && $y[0]['buruk'] != '')
                                            {{ $y[0]['buruk'] }}
                                        @elseif(isset($y[0]['biasa']) && $y[0]['biasa'] != '')
                                            {{ $y[0]['biasa'] }}
                                        @elseif(isset($y[0]['baik']) && $y[0]['baik'] != '')
                                            {{ $y[0]['baik'] }}
                                        @elseif(isset($y[0]['sangat_baik']) && $y[0]['sangat_baik'] != '')
                                            {{ $y[0]['sangat_baik'] }}
                                        @endif
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                {{-- <span class="text-nowrap">Since last month</span>
                                --}}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <hr>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart">
                                <!-- Chart wrapper -->
                                <canvas id="mood"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">

                            <h3>Motivasi Untukmu</h3>
                            <div class="card mt-2">
                                <h5 class="card-header">
                                    Motivasi
                                </h5>
                                <div class="card-body">
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection


@push('footer-scripts')
    <script>
        var yLabels = {
            1: 'Sangat Baik',
            2: 'Baik',
            3: 'Bisasa',
            4: 'Buruk',
            5: 'Sangat Buruk',
        }

        <?php
        $t = 0;
        if (isset($y[0]['sangat_buruk'])) {
            $t = 1;
        }
        elseif(isset($y[0]['buruk'])) {
            $t = 2;
        }
        elseif(isset($y[0]['biasa'])) {
            $t = 3;
        }
        elseif(isset($y[0]['baik'])) {
            $t = 4;
        }
        elseif(isset($y[0]['sangat_baik'])) {
            $t = 5;
        }
        ?>

        var ctx = document.getElementById('mood').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Grafik Moodku',
                    backgroundColor: '#25c196',
                    borderColor: '#7986BF',
                    data: [
                        <?= $t; ?>
                    ]
                }]
            },

            // Configuration options go here
            options: {
                // legend: {
                //     display: false
                // },
                scales: {
                    yAxes: [{
                        ticks: {
                            // beginAtZero: true,
                            callback: function(value, index, values) {
                                return yLabels[value];
                                // switch (value) {
                                //     case 5:
                                //         return 'Sangat Buruk';
                                //     break;

                                //     case 4:
                                //         return 'Buruk';
                                //     break;
                                
                                //     case 3: 
                                //         return 'Biasa';
                                //     break;

                                //     case 2: 
                                //         return 'Baik';
                                //     break;

                                //     case 1: 
                                //         return 'Sangat Baik';
                                //     break;

                                //     default:
                                //         break;
                                // }
                            }
                        }
                    }]
                }
                // title: {
                //     display: true,
                //     text: 'Shameless Bar Graph to show proficency in skills'
                // }
            }
        });

    </script>
@endpush
