@extends('layouts.app')

@section('content')  
<main class="fondo">
	<div class="video scrollspy">
		<div class="valign-wrapper">
			<div class="container">
				<div class="row fadeInBottom">
					<div class="col m6 offset-m3 s12">
						<img src="/img/logo.png" class="responsive-img" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="hero scrollspy">
		<div class="valign-wrapper">
			<div class="container center">
				<h2 class="title white-text">Hagamos <br><span class="bold">tequila zb</span></h2>
				<p class="white-text">100% de Agave</p>
				<br><br>
				<img src="/img/adorno.png" class="responsive-img" alt="">
				<div class="row">
					<div class="col m4 offset-m4">
						<p class= "white-text">Somos una empresa joven con la  mirada puesta en los campos de agave, el inicio que marca el proceso de hacer un <span class="bold">buen tequila</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="black section scrollspy">
			<div class="container">
			<div class="row">
				
				<div class="col m6 s12 center push-m6 fadeInLeft">
					<img src="/img/adorno.png" class="responsive-img" width="100px" alt="">
					<h3 class="white-text title">Nuestra propuesta</h3>
					<h4 class="white-text title">nace con el compromiso</h4>
					<img src="/img/agave2.jpg" class="responsive-img" alt="">
				</div>
				<div class="col m6 s12 pull-m6 m-t-1  fadeInRight">

					<img src="/img/agave1.jpg" class="responsive-img" alt="">
					<p class="white-text">Nace con el compromiso de nuestros  productores agaveros y el gran trabajo que hacen en las tierras con denomicación de origen, plantando el Agave con la mejor calidad... <span class="bold">Tequilana Weber </span></p>
				</div>
			</div>
		</div>
	</div>

	<div class="deg section">
		<div class="row center container m-t-2">
			<div class="col m6 s12">
				<img src="/img/jimadores.jpg" class="responsive-img" alt="">
			</div>
			<div class="col m6 s12">
				<h3 class="cafe-text title">El cuidado de</h3>
				<h4 class="cafe-text title mt-2 doble">un buen tequila</h4>
				<p class="cafe-text right-align">Es puesto en las manos de las personas <br>que día a día supervisan cada etapa <br>de la línea de producción.</p>
			</div>
		</div>
	</div>

	<div class="section hero2">
		<div class="container">
			<div class="row m-t-1 m-b-1">
				<div class="col m6 s12 ml-1">
					<h3 class="white-text title">vive toda una experiencia</h3>
					<p class="white-text">Vive toda una experiencia conociendo el Gran Turismo Tequilero de los Altos </p>
					<a href="" class="btn dorado">Lo quiero conocer</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section deg2">
		<div class="center">
			<h2 class="cafe-text title bold">ultimas noticias</h2>
			<div class="row m-b-1">
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
			</div>
		</div>
	</div>

	<div class="section banner">
		<div class="container">
			<div class="row">
				<div class="col m4 s12">
					<img src="/img/logo.png" class="responsive-img" alt="">
				</div>
				<div class="col m4 s12">
					<img src="/img/logo.png" class="responsive-img" alt="">
				</div>
				<div class="col m4 s12">
					<img src="/img/logo.png" class="responsive-img" alt="">
				</div>
			</div>
		</div>
	</div>
</main>

@endsection
