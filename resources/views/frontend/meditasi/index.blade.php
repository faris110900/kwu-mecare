@extends('frontend.master')

@section('title', 'Instrumen Meditasi')

@section('content')

    <section id="meditasi-instrumen" class="meditasi-instrumen">
        <div class="container">
            <h3>Instrumen Meditasi</h3>

            <div class="row">
                @foreach ($meditasi as $md)
                    <div class="col-md-4 mt-3">
                        <a href="{{ route('frontend.meditasi-show', $md) }}">
                            <div class="card ml-3">
                                <img src="{{ asset('storage/' . $md->image) }}" class="img-fluid">
                                <div class="card-body">
                                    <h5>{{ $md->name }}</h5>
                                    <p>
                                        {{ $md->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>

    </section>

@endsection
