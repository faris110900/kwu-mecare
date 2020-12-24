@extends('frontend.master')

@section('title', 'Pixel React')

@section('content')

<section id="pixel" class="pixel">
    <div class="container">
        <form action="{{ route('frontend.pixel.reaction') }}" method="post">
            {{ csrf_field() }}
            <div class="card-flex" align="center">
                <div class="card card-pixel shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h2 align="center" class="mb-3">
                            Kamu Merasa ?
                        </h2>
                        
                        <div class="form-group">
                            <div class="react-pixel" align="center">
                                <button type="submit" class="btn-react" name="sangat_buruk" value="sangat_buruk" style="border: none; background: none; color: #444444;">
                                    <i class="far fa-sad-tear fa-4x"></i>
                                </button>

                                <button type="submit" class="btn-react" name="buruk" value="buruk" style="border: none; background: none; color: #444444;">
                                    <i class="far fa-frown fa-4x ml-3"></i>
                                </button>

                                <button type="submit" class="btn-react" name="biasa" value="biasa" style="border: none; background: none; color: #444444;">
                                    <i class="far fa-meh fa-4x ml-3"></i>
                                </button>

                                <button type="submit" class="btn-react" name="baik" value="baik" style="border: none; background: none; color: #444444;">
                                    <i class="far fa-smile-beam fa-4x ml-3"></i>
                                </button>

                                <button type="submit" class="btn-react" name="sangat_baik" value="sangat_baik" style="border: none; background: none; color: #444444;">
                                    <i class="far fa-laugh-wink fa-4x ml-3"></i>
                                </button>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
    
@endsection