@extends('frontend.master')

@section('title', 'Mental Pixel Cek')

@section('content')

    <section id="pixel" class="pixel">
        <div class="container">
            <form action="" method="post">

                <div class="card-flex" align="center">
                    <div class="card card-pixel shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <h2 align="center" class="mb-3">
                                Kamu Merasa ?
                            </h2>

                            <div class="form-group">
                                <div class="react-pixel" align="center">
                                    <i class="far fa-sad-tear fa-4x"></i>
                                    <i class="far fa-frown fa-4x ml-3"></i>
                                    <i class="far fa-meh fa-4x ml-3"></i>
                                    <i class="far fa-smile-beam fa-4x ml-3"></i>
                                    <i class="far fa-laugh-wink fa-4x ml-3"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-flex" align="center">
                    <div class="card card-pixel shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <h2 align="center" class="mt-3 mb-3">
                                Emosi yang sedang kamu rasakan saat ini ?
                            </h2>

                            <div class="checkbox-pixel d-flex justify-content-center">
                                @foreach ($emosi as $emo)
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" name="emosi[]" type="checkbox"
                                            value="{{ $emo->name }}">
                                        <label class="form-check-label" for="">
                                            {{ $emo->name }}
                                        </label>
                                    </div>
                                    {{-- @continue --}}
                                    @php
                                    if ($emo->id == 2) {
                                    echo "<br>";
                                    }
                                    @endphp

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-flex" align="center">
                    <div class="card card-pixel shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">

                            <h2 align="center" class="mt-3 mb-3">
                                Emosi yang sedang kamu rasakan saat ini ?
                            </h2>

                            <div class="checkbox-pixel d-flex justify-content-center">
                                @foreach ($faktor as $fk)
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" name="faktor[]" type="checkbox"
                                            value="{{ $fk->name }}">
                                        <label class="form-check-label" for="">
                                            {{ $fk->name }}
                                        </label>
                                    </div>
                                    {{-- @continue --}}

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="button" align="center">
                    <button class="btn btn-create" value="save" type="submit">Lanjutkan</button>
                </div>

            </form>
        </div>
    </section>

@endsection
