<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    <title>Nuansa Malam</title>
</head>

<style>
    body {
        background: url("{{ asset('storage/' . $meditasi->image) }}");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    h1 {
        padding: 280px 200px 100px 250px;
        color: #fff;
    }

</style>

<body>

    <div class="container">
        <div class="d-flex align-content-center">
            <h1 align="center">
                {{ $meditasi->deskripsi }}
            </h1>

        </div>
        <div class="button-play" align="center">
            <audio id="audio">
                <source src="{{ asset('storage/' . $meditasi->instrumen) }}" type="audio/mpeg">
            </audio>
            <button class="btn btn-primary" id="playPauseBtn" onClick="playPause()" align="center">
                <i class="fas fa-play"></i>
            </button>
            <button class="btn btn-danger ml-3" onClick="stop()" align="center">
                <i class="fas fa-stop"></i>
            </button>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

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

</body>

</html>
