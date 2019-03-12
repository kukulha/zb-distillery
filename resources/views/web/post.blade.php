@extends('layouts.app')

@section('content')
	<main>
		<article class="section container">
			<div class="row">
				<div class="col  s12">
					<img src="{{ $post->file }}" class="responsive-img" alt="">
					<div class="center">
						<h2 class="cafe-text title doble">{{ $post->name }}</h2>
						<p class="small dorado-text title">Autor: {{ $post->user->name }}</p>
						<p class="small dorado-text title">Fecha: {{ $post->created_at }}</p>
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