    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

        {{-- <h1 class="logo mr-auto"><a href="{{ url('/') }}">Afecto</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{ asset('assets/img/logo-fix.png') }}" alt="" class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="{{ Request::segment(0) === 'home' ? 'active' : null }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::segment(1) === 'story-home' ? 'active' : null }}"><a href="{{ url('story-home') }}">Ceritamu</a></li>
                    <li class="{{ Request::segment(1) === 'story-home' ? 'active' : null }}"><a href="{{ url('konseling') }}">Konseling</a></li>
                    <li class="{{ Request::segment(2) === 'langganan' ? 'active' : null }}"><a href="{{ url('langganan') }}">Langganan</a></li>
                    <li class="drop-down"><a href="">Moodku</a>
                        <ul>
                            
                            <li><a href="{{ url('meditasi-home') }}">Meditasi</a></li>
                            <li><a href="{{ url('pixel-home') }}">Mental Pixel</a></li>
                        </ul>
                    </li>
                    @if(Auth::check())
                    <li class="drop-down font-weight-bold"><a href=""
                        style="color: #7986BF;">{{ Auth::user()->name }}</a>
                    <ul>
                        <li class="{{ Request::segment(1) === 'story' ? 'active' : null }}"><a href="{{ route('frontend.story.index') }}">My Story</a></li>
                        <li><a href="{{ url('profile') }}">Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" class="text-sm text-gray-700 underline" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                
                @else
                    <a href="{{ route('login') }}" class="get-started-btn scrollto ml-2 text-white">Coba
                    bercerita</a>
                    @endif
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
@stack('navbar-scripts')
