@extends('frontend.master')

@section('title', 'Mental Pixel')

@section('content')

    <section id="pixel-index" class="pixel-index">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Moodku</h5>
                                    <span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">

                                <span class="text-nowrap">{{ $pixel[0]->created_at->isoFormat('dddd') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Emosi</h5>
                                    @foreach ($pixel as $px)
                                        <span class="badge badge-info mt-3">{{ $px->emosi }}</span>
                                    @endforeach
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">{{ $pixel[0]->created_at->isoFormat('dddd') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Faktor</h5>
                                    @foreach ($pixel as $px)
                                        <span class="badge badge-info mt-3">{{ $px->faktor }}</span>
                                    @endforeach
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-scroll"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">{{ $pixel[0]->created_at->isoFormat('dddd') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection
