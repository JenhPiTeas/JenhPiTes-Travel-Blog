{{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--    <div class="container-fluid">--}}
{{--        <!-- Navbar brand -->--}}
{{--        <a class="navbar-brand me-3" href=" {{ url('/') }} ">--}}
{{--            <i class="fab fa-atlassian fa-fw fa-lg text-danger"></i>--}}
{{--        </a>--}}

{{--        <a href="{{ url('admin/dashboard') }}">--}}
{{--            <button type="button" class="btn btn-outline-danger text-danger px-3" href= "{{ url('admin/dashboard') }}">--}}
{{--                DASHBOARD--}}
{{--            </button>--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav me-auto">--}}

{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    @if (Route::has('login'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<div class="fixed z-50 flex w-full items-center justify-center bg-white bg-opacity-50 backdrop-blur-md">
    <div class="container relative mx-auto flex h-[84px] justify-between">
        <div class="flex items-center justify-center px-[10px]">
            <a href="http://127.0.0.1:8000">
                <span
                    style="box-sizing: border-box;
                display: inline-block;
                overflow: hidden;
                width: initial;
                height: initial;
                background: none;
                opacity: 1;
                border: 0;
                margin: 0;
                padding: 0;
                position: relative;
                max-width: 100%;">
                    <span
                        style="box-sizing: border-box;
                    display: block;
                    width: initial;
                    height: initial;
                    background: none;
                    opacity: 1;
                    border: 0;
                    margin: 0;
                    padding: 0;
                    max-width: 100%;"><img
                            style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                            alt="" aria-hidden="true"
                            src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e"></span>
                    <img class="w-[50px]"
                         style="position: absolute;  inset:0px; box-sizing:border-box; padding:0px; max-width:100%; min-height:100%; max-height:100%;"
                         src="https://jomnot.com/logo.svg" alt="">
                </span>
            </a>
        </div>
        <div class="flex items-center justify-center">
            <div class="mr-[20px] hidden lg:flex"></div>
            <div class="flex space-x-1">
                <div class="flex">
                    <div class="relative inline-block">
                        <button id="headlessui-menu-button-:R1iiql6:" class="flex items-center"
                                type="button" aria-haspopup="true" aria-expanded="false"
                                data-headlessui-state="">
                            <div class="h-[36px] w-[36px] rounded-full transition-all hover:bg-primary">
                                <span
                                    style="box-sizing: border-box;
                                display: inline-block;
                                overflow: hidden;
                                width: initial;
                                height: initial;
                                background: none;
                                opacity: 1;
                                border: 0;
                                margin: 0;
                                padding: 0;
                                position: relative;
                                max-width: 100%;">
                                    <span
                                        style="box-sizing: border-box;
                                display: block;
                                width: initial;
                                height: initial;
                                background: none;
                                opacity: 1;
                                border: 0;
                                margin: 0;
                                padding: 0;
                                max-width: 100%;">
                                        <img src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2736%27%20height=%2736%27/%3e"
                                             style="display: block;
                                max-width: 100%;
                                width: initial;
                                height: initial;
                                background: none;
                                opacity: 1;
                                border: 0px none;
                                margin: 0px;
                                padding: 0px;"
                                             alt=""></span>
                                    <img src="https://jomnot.com/_next/image?url=%2Fimages%2Flang_km.png&w=96&q=75"
                                         alt="Change Language"
                                         style="position: absolute;
                                    inset: 0px;
                                    box-sizing: border-box;
                                    padding: 0px;
                                    border: medium none;
                                    margin: auto;
                                    display: block;
                                    width: 0px;
                                    height: 0px;
                                    min-width: 100%;
                                    max-width: 100%;
                                    min-height: 100%;
                                    max-height: 100%;">
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <a href="">
                {{-- nothing to do yet --}}
            </a>
            <div class="hidden pl-2 text-right drop-shadow-xl lg:flex">
                <div class="relative inline-block text-left">
                    <div>
                        <button id="headlessui-menu-button-:rt:"
                                class="flex h-[40px] w-[40px] items-center justify-center rounded-full bg-primary bg-opacity-100 px-[5px] py-[5px] text-sm font-medium text-white hover:bg-opacity-90 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
                                type="button" aria-haspopup="true" aria-expanded="false">
                            <img src="" alt=""
                                 style="display:inline-block; width: 22px; height: 22px; background: black;">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
