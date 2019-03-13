@extends('layouts.app')

@section('title')
{{ $post->name }}
@endsection

@section('seo')

	<meta name="keywords" content="@foreach($post->tags as $tag) {{ $tag->name }} @endforeach">
    <meta name="description" content="{{$post->excerpt}}">
    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="{{ $post->name }}">
    <meta property="twitter:description" content="{{ $post->excerpt }}">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.zbdistillery.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
    

    <!--SEO Facebook -->    
    <meta property="og:title" content="{{ $post->name }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ Request::url()}}">
    <meta property="og:image" content="http://zbdistillery.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

    <!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Article",
            "name": "{{ $post->name }}",
            "headline": "{{ $post->name }}",
            "url": "http://www.zbdistillery.com/blog/{{ $post->slug }}",
            "image": "http://zbdistillery.com{{ Storage::url($post->file) }}",
            "description" : "{{ $post->excerpt }}",
            "keywords" : "@foreach($post->tags as $tag) {{ $tag->name }} @endforeach",
            "author": {
				"@type": "Person",
				"name" : "{{ $post->user->name }}"
        	},
            "datePublished": "{{ $post->created_at->diffForHumans() }}",
            "dateModified": "{{ $post->updated_at->diffForHumans() }}",
            "publisher": {
				"@type": "Organization",
				"name" : "ZB Distillery",
				"logo": {
					"@type": "imageObject",
					"url": "http://www.zbdistillery.com/img/logo.png"
				}
        	},
        	"mainEntityOfPage" : {
				"@type": "WebPage",
				"@id": "http://www.zbdistillery.com"
        	}
        }
    </script> 
@endsection

@section('content')
	<main>
		<article class="section container">
			<div class="row">
				<div class="col  s12">
					<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
					<div class="center">
						<h2 class="cafe-text title doble">{{ $post->name }}</h2>
						<p class="small dorado-text title">Autor: {{ $post->user->name }}</p>
						<p class="small dorado-text title">Fecha: {{ $post->created_at->format('l d \d\e F Y, g:i a') }}</p>
						<p class="small dorado-text title">Categoria: {{ $post->category->name }}</p>
						<p class="small dorado-text title">Etiquetas: 
							@forelse($post->tags as $tag)
								<span class="chip">{{ $tag->name }}</span>
							@empty
								<em>Sin etiquetas</em>
							@endforelse
						</p>

						<div class="doble"></div>
						<p class="cafe-text justify">{!! $post->body !!}</p>
					</div>
				</div>
				
			</div>
		</article>
		<div class="row ">
			@if($related->isEmpty())
				<h4 class="grey-text text-darken-3">No hay articulos relacionados</h4>
			@else
				<div class="section-title">
					<div class="row center">
				    	<h4 class="grey-text text-darken-3">Articulos relacionados</h4>
				    	@foreach($related as $post)
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
				    </div>
				</div>
			@endif
		</div>
	</main>
@endsection