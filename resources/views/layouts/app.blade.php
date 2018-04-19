<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Own Site | Doan Le</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-primary navbar-laravel navbar-top">
        <div class="container text-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContentHidden">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="{{ route('myblog') }}">My Blog</a></li>
                    <li><a class="nav-link" href="{{ route('serie-bv') }}">Serie Bài Viết</a></li>
                    <li><a class="nav-link" href="{{ route('chuyende') }}">Chuyên Đề</a></li>
                    <li><a class="nav-link" href="{{ route('dichvu') }}">Dịch Vụ</a></li>
                    <li><a class="nav-link" href="{{ route('gioithieu') }}">Giới Thiệu</a></li>
                    <li><a class="nav-link" href="{{ route('lienhe') }}">Liên Hệ</a></li>
                </ul>
                @if(Auth::check())
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-link ml-auto btn btn-outline-primary" href="{{ route('admin') }}">Admin Page</a>
                        <a class="nav-link ml-auto btn btn-outline-primary" href="{{ route('logout') }}">Logout </a>
                    </ul>
                @else
                    <a class="nav-link ml-auto" href="/login">Login</a>
                @endif

            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-primary navbar-laravel navbar-under-top sticky-top" id="navbar-under-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid logo-full-size" src="{{ asset('upload/images/logo.png')}}">
            </a>
            <a class="navbar-brand slogan-title" href="{{ url('/') }}">
                <h4 class="slogan" style="font-family: Lobster; font-weight: lighter">Hãy sống với đam mê.</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                Menu
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                {{--<ul class="navbar-nav mr-auto ul-list">--}}
                    {{--Háy sống với đam mê.--}}
                {{--</ul>--}}
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto ul-list">
                    <li class="nav-item"><a class="nav-link" href="{{ route('myblog') }}">My Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('serie-bv') }}">Serie Bài Viết</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('chuyende') }}">Chuyên Đề</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('dichvu') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch Vụ</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('dichvu') }}">Thiết kê phát Triển Website</a>
                            <a class="dropdown-item" href="{{ route('dichvu') }}">Phát triển Ứng dụng di động</a>
                            <a class="dropdown-item" href="{{ route('dichvu') }}">Thiết kế Logo</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('gioithieu') }}">Giới Thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('lienhe') }}">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('breadcrumb')
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <div class="container">
        @include('layouts.footer');
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
