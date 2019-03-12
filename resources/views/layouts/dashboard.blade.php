<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <ul class="sidenav sidenav-fixed black" id="slide-out">
        <li><div class="user-view"><a href="#!"><img class="responsive-img" src="/img/logo.png"></a></div></li>
        <li><a href="{{ route('home') }}" class="white-text title">Ver página</a></li>
        <li><a href="{{ route('admin') }}" class="white-text title">Administración</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('categories.index') }}" class="white-text title">Categorias</a></li>
        <li><a href="{{ route('posts.index') }}" class="white-text title">Articulos</a></li>
        <li class="divider"></li>
        <li><a class="white-text title" href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="material-icons right white-text">close</i>{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <header class="fixed">
       
        <div class="section black z-depth-2">
            <div class="container">
                <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only right"><i class="material-icons white-text">menu</i></a>
                <h5 class="white-text">Hola {{ Auth::user()->name }}</h5>
                <p class="dorado-text">@yield('subtitulo')</p>
            </div>
        </div>
        @if(session('info'))
        <div class="center">
            <div class="green lighten-5 section ">
                <p class="green-text text-darken-5">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    @if(count($errors))
        <div class="fixed center">
            <div class="red lighten-5 section ">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="red-text text-darken-5">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </header>

    
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
