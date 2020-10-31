<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Admin MeCare
    </title>

    @include('frontend.include._header-script')

</head>

<body class="">
    @include('frontend.include._sidebar-script')
    <div class="main-content">
        @include('frontend.include._navbar-script')
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.include._footer')
    </div>

    @include('frontend.include._footer-script')
</body>

</html>
