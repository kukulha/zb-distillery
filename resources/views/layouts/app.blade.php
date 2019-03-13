<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!--SEO Organico -->  
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }} || @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="www.kukulha.com">
    <meta name="designer" content="www.kukulha.com">
    <!-- GOOGLE SEO -->    
    <meta name="robots" content="index,follow" />
    <meta name="geo.region" content="MX" />

    @yield('seo')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('links')
    
</head>
<body>
    @if (request()->is('home'))
        <div class="navbar-fixed">
            <div class="menu pinned">
                <a><i class="material-icons medium white-text">more_horiz</i></a>
            </div>
            <nav class="black esconder" id="menu">
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" class="resposive-img" width="100px" alt=""></a>
                        <a href="#" data-target="movil" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="{{ route('home') }}" class="title">Inicio</a></li>
                            <li><a href="{{ route('zb') }}" class="title">ZB Distillery</a></li>
                            <li><a href="{{ route('posts') }}" class="title">Noticias</a></li>
                            @auth
                            <li><a href="{{ route('admin') }}" class="title">{{ Auth::user()->name }}</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    @else
    <div class="navbar-fixed">
        <nav class="black">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" class="resposive-img" width="100px" alt=""></a>
                    <a href="#" data-target="movil" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ route('home') }}" class="title">Inicio</a></li>
                        <li><a href="{{ route('zb') }}" class="title">ZB Distillery</a></li>
                        <li><a href="{{ route('posts') }}" class="title">Noticias</a></li>
                        @auth
                            <li><a href="{{ route('admin') }}" class="title">{{ Auth()->user()->name }}</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    

    @endif

    <div class="sidenav black" id="movil">
        <ul>
            <li><a href="{{ route('home') }}" class="white-text title">Inicio</a></li>
            <li><a href="{{ route('zb') }}" class="white-text title">ZB Distillery</a></li>
            <li><a href="{{ route('posts') }}" class="white-text title">Noticias</a></li>
        </ul>
    </div>

    @yield('content')

    <footer class="page-footer black overflow section">
        <div class="container">
            <div class="row">
                <div class="col m4 s12 offset-m4">
                    <img src="/img/logo.png" class="responsive-img" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" async></script>
    @yield('scripts')

</body>
</html>
