@extends('layouts.app')

@section('title')
Enterate de la sultimas noticias
@endsection

@section('seo')

	<meta name="keywords" content="">
    <meta name="description" content="Enterate de las ultimas noticias">
    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="ZB Distillery">
    <meta property="twitter:description" content="Enterate de las ultimas noticias">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.zbdistillery.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
    

    <!--SEO Facebook -->    
    <meta property="og:title" content="ZB Distillery">
    <meta property="og:description" content="Enterate de las ultimas noticias">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url()}}">
    <meta property="og:image" content="http://zbdistillery.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

    <!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Blog",
            "name": "ZB Distillery",
            "url": "http://www.zbdistillery.com",
            "image": "http://zbdistillery.com/img/logo.png",
            "description" : "Enterate de las ultimas noticias"
        }
    </script> 
@endsection

@section('content')
<main>
	<div class="hero4">
		<div class="valign-wrapper">
			<div class="container">
				<div class="center mt-4">
					<img src="/img/adorno.png" class="responsove-img" width="150px" alt="">
					<h2 class="cafe-text title doble bold h1">Lista de Articulos</h2>
				</div>
			</div>
		</div>
	</div>

	<section class="section">
		<div class="row">
			@foreach($posts as $post)
				<div class="col m4 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="{{ $post->file }}" alt="">
						</div>
						<div class="card-reveal negro">
  							<span class="card-title white-text">{{ $post->name }}</span>
  							<p class="white-text ">{{ $post->excerpt }}</p>
  							<a href="{{ route('post', $post->slug) }}" class="btn dorado">Ver más</a>
						</div>
					</div>
				</div>
			@endforeach
			<br>
			
		</div>
		<div class="center">
				{{ $posts->links('pagination::default') }}
			</div>
	</section>
</main>
@endsection