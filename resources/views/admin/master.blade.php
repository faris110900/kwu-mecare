<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Admin Afecto
    </title>

    @include('admin.include._header-script')

</head>

<body class="">
    @include('admin.include._sidebar-script')
    <div class="main-content">
        @include('admin.include._navbar-script')
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            {{-- <div class="container-fluid"> --}}
                <div class="header-body">
                    
                        @yield('content-admin')
                    
                </div>
            {{-- </div> --}}
        </div>

        @include('admin.include._footer')
    </div>

    @include('admin.include._footer-script')
    @stack('scripts')
</body>

</html>
