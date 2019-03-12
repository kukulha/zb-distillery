<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Hagamos Tequila ZB</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('links')
    
</head>
<body>
	<main>
		<div class="disclaimer">
			<div class="valign-wrapper">
				<div class="container">
					<div class="row">
						<div class="col m8 offset-m2 s12 center">
							<img src="/img/logo.png" class="responsive-img" alt="">
							<br>
							<h3 class="white-text">¿Eres mayor de Edad?</h3>
							<img src="/img/adorno.png" class="responsive-img hide-on-med-and-down" alt="">
							<br>
							<a href="{{ route('home') }}" class="border">SÍ</a>
							<a href="http://alcoholinformate.org.mx" class="border">NO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slogan center">
			<h1 class="title">Hagamos <br><span class="bold">Tequila ZB</span></h1>
			<h2 class="title">100% de Agave</h2>
		</div>
		<div class="leyendas">
			<a class="title small white-text" href="">Evita el exceso</a>
			<a class="title small white-text" href="">Aviso de Privacidad</a>
		</div>
	</main>
</body>
</html>