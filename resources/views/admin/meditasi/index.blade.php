@extends('admin.master')

@section('title-admin', 'Data Meditasi')

@section('content-admin')

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="button mb-3" align="right">
                    <a href="{{ route('frontend.meditasi.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <table id="table-meditasi" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Deskripsi</th>
                            <th>image</th>
                            <th>Instrumen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meditasi as $md)
                            <tr>
                                <td>{{ $md->name }}</td>
                                <td>{{ $md->deskripsi }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $md->image) }}" width="100px" class="img-fluid" alt=""
                                        srcset="">
                                </td>
                                <td>
                                    <audio id="audio">
                                        <source src="{{ asset('storage/' . $md->instrumen) }}" type="audio/mpeg">
                                    </audio>
                                    <button class="btn btn-primary" id="playPauseBtn" onClick="playPause()" align="center">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-danger" onClick="stop()" align="center">
                                        <i class="fas fa-stop"></i>
                                    </button>
                                </td>
                                <td>
                                    <a class="btn btn-success"
                                        href="{{ route('frontend.meditasi.edit', $md) }}">Edit</a>
                                    <a class="btn btn-danger"
                                        href="{{ route('frontend.meditasi.delete', $md->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        var audio = document.getElementById('audio');
        var playPauseBtn = document.getElementById('playPauseBtn');
        var count = 0;

        function playPause() {
            if (count == 0) {
                count = 1;
                audio.play();
                playPauseBtn.innerHTML = "<i class='fas fa-pause'></i>";
            } else {
                count = 0;
                audio.pause();
                playPauseBtn.innerHTML = "<i class='fas fa-play'></i>";
            }
        }

        function stop() {
                playPause();
                audio.pause();
                audio.currentTime = 0;
            }


        $(document).ready(function() {
            $('#table-meditasi').DataTable();
        });

    </script>
@endpush
