<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>

    @include('frontend.include._header-script')

</head>

<body>
        @include('frontend.include._navbar-script')
        <!-- Header -->
        
                
            @yield('content')


        @include('frontend.include._footer')
        
    @include('frontend.include._footer-script')
    @stack('scripts')
</body>

</html>
