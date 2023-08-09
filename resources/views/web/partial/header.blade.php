<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">


        {{-- <img src="{{ asset('dashboard_assets') }}/images/mms-logo3.PNG"  alt="" class="rounded-circle" style="height:60px;" srcset=""></span></a></div> --}}

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <h1>MMS</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/">About</a></li>

                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>

                            </ul>
                        </li>
                    </ul>

                </li> --}}

            </ul>
        </nav><!-- .navbar -->

        @if (Route::has('login'))
            @auth
                @if (auth()->user()->profile_image)
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('upload/images/' . auth()->user()->profile_image) }}"
                            style="width: 40px;height:40px;" class="rounded-circle" alt="" srcset="">
                    </a>
                @else
                    <a href="{{ route('dashboard') }}">
                        {{ auth()->user()->name }}
                    </a>
                @endif
            @else
                <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            @endauth
        @endif

        {{-- @if (auth()->user()->profile_image)
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('upload/images/' . auth()->user()->profile_image) }}"
                style="width: 40px;height:40px;" class="rounded-circle" alt="" srcset="">
        </a>
    @else
        <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    @endif --}}


    </div>
</header>
