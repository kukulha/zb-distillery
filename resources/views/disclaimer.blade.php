<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<!--SEO Organico -->  
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="www.kukulha.com">
    <meta name="designer" content="www.kukulha.com">
    <!-- GOOGLE SEO -->    
    <meta name="robots" content="index,follow" />
    <meta name="geo.region" content="MX" />
    <meta name="keywords" content="">
    <meta name="description" content="Somos una empresa joven con la mirada puesta en los campos de agave, el inicio que marca el proceso de hacer un buen tequila">
    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="ZB Distillery">
    <meta property="twitter:description" content="Somos una empresa joven con la mirada puesta en los campos de agave, el inicio que marca el proceso de hacer un buen tequila">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.zbdistillery.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
    

    <!--SEO Facebook -->    
    <meta property="og:title" content="ZB Distillery">
    <meta property="og:description" content="Somos una empresa joven con la mirada puesta en los campos de agave, el inicio que marca el proceso de hacer un buen tequila">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url()}}">
    <meta property="og:image" content="http://zbdistillery.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

    <!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "name": "ZB Distillery",
            "url": "http://www.zbdistillery.com",
            "image": "http://zbdistillery.com/img/logo.png",
            "description" : "Somos una empresa joven con la mirada puesta en los campos de agave, el inicio que marca el proceso de hacer un buen tequila",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Tepatitlán",
                "addressRegion": "JC",
                "postalCode": "47700",
                "streetAddress": "Carretera Tepa-Arandas Kilómetro 4.5, Rancho Las Peñitas"
            },
            "telephone": "+52 013787010112"
        }
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

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