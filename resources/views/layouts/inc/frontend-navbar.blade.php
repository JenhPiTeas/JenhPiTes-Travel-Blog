{{--<!-- Navbar -->--}}
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <!-- Container wrapper -->--}}
{{--    <div class="container-fluid">--}}
{{--        <!-- Navbar brand -->--}}
{{--        <a class="navbar-brand me-3" href="#">--}}
{{--            <i class="fab fa-atlassian fa-fw fa-lg text-danger"></i>--}}
{{--        </a>--}}

{{--        <a href="{{ url('admin/dashboard') }}">--}}
{{--            <button type="button" class="btn btn-outline-danger text-danger px-3" href="">--}}
{{--                DASHBOARD--}}
{{--            </button>--}}
{{--        </a>--}}

{{--        <!-- Toggle button -->--}}
{{--        <button--}}
{{--            class="navbar-toggler"--}}
{{--            type="button"--}}
{{--            data-mdb-toggle="collapse"--}}
{{--            data-mdb-target="#navbarButtonsExample"--}}
{{--            aria-controls="navbarButtonsExample"--}}
{{--            aria-expanded="false"--}}
{{--            aria-label="Toggle navigation"--}}
{{--        >--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </button>--}}

{{--        <!-- Collapsible wrapper -->--}}
{{--        <div class="collapse navbar-collapse" id="navbarButtonsExample">--}}

{{--            <div class="d-flex align-items-center ms-auto">--}}
{{--                <button type="button" class="btn btn-link text-danger px-3 me-2">--}}
{{--                    Login--}}
{{--                </button>--}}
{{--                <button type="button" class="btn btn-danger me-3">--}}
{{--                    Sign up for free--}}
{{--                </button>--}}
{{--                <a--}}
{{--                    class="btn btn-dark px-3"--}}
{{--                    href="https://github.com/mdbootstrap/mdb-ui-kit"--}}
{{--                    role="button"--}}
{{--                ><i class="fab fa-github"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Collapsible wrapper -->--}}
{{--    </div>--}}
{{--    <!-- Container wrapper -->--}}
{{--</nav>--}}
{{--<!-- Navbar -->--}}

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-3" href=" {{ url('/') }} ">
            <i class="fab fa-atlassian fa-fw fa-lg text-danger"></i>
        </a>

        <a href="{{ url('admin/dashboard') }}">
            <button type="button" class="btn btn-outline-danger text-danger px-3" href= "{{ url('admin/dashboard') }}">
                DASHBOARD
            </button>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
