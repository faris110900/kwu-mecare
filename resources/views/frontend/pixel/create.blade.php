@extends('frontend.master')

@section('title', 'Mental Pixel Cek')

@section('content')

    <section id="pixel" class="pixel">
        <div class="container">
            <form action="{{ route('frontend.pixel.store') }}" method="post">
                {{ csrf_field() }}

                <input class="form-control" type="hidden" name="pixel_id" value="{{ $pixelReact[0]->id }}">

                <div class="card-flex" align="center">
                    <div class="card card-pixel shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <h2 align="center" class="mt-3 mb-3">
                                Emosi yang sedang kamu rasakan saat ini ?
                            </h2>

                            <div class="checkbox-pixel d-flex justify-content-center">
                                @foreach ($emosi as $emo)
                                    <div class="">
                                        <div class="form-check ml-1">
                                            <input class="form-check-input" name="emosi[]" type="checkbox"
                                                value="{{ $emo->name }}">
                                            <label class="form-check-label" for="">
                                                {{ $emo->name }}
                                            </label>
                                        </div>
                                    </div>

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
                                    <div class="form-check ml-1">
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

