<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <h1>MMS</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/home">About</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>

                </ul>
              </li>
            </ul>
          </li> --}}

            </ul>
        </nav><!-- .navbar -->

        <a class="btn-book-a-table" href="{{ route('login') }}">Login</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>
