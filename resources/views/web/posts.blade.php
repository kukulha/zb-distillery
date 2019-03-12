@extends('layouts.app')

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