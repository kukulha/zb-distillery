@extends('layouts.app')

@section('links')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
@endsection

@section('content')
<main>
	<div class="hero3 section ">
		<div class="valign-wrapper">
			<div class="container center fadeIn">
				<img src="/img/logo.png" class="responsive-img hide-on-med-and-down" width="350px" alt="">
				<h2 class="white-text title">aún en nuestros <br><span class="h1 bold">inicios</span> <br>hay mucha historia</h3>
				<br>
				<img src="/img/adorno.png" class="responsive-img" width="100px" alt="">
			</div>
		</div>
	</div>

	<section class="section">
		<div class="row">
			<div class="col m6 s12">
				<div class="card fadeInLeft">
					<div class="card-image">
						<img src="/img/capilla.jpg" class="responsive-img" alt="">
					</div>
					<div class="card-content center">
						<span class="card-title title">Sobre Capilla de Guadalupe</span>
						<a href="#!" class="btn dorado activator">ver mas</a>
					</div>
					<div class="card-reveal">
						<span class="card-title cafe-text"><i class="material-icons">close</i></span>
      					<p class="cafe-text">Lleno de tradición charra y de tierras tequileras se encuentra Capilla de Guadalupe, un pueblito fundado en el año de 1820 y que desde entonces ha sido el Alma de los Altos de Jalisco. Gracias a la tradición agavera y al respaldo de su gente trabajadora, este pequeño pueblo cobijado por la majestuosidad del Cerro Gordo ha visto un desarrollo constante en territorio, empresas, gente…</p>
					</div>
				</div>
			</div>
			<div class="col m6 s12">
				<div class="card fadeInRight">
					<div class="card-image">
						<img src="/img/hacienda.jpg" class="responsive-img" alt="">
					</div>
					<div class="card-content center">
						<span class="card-title title">Sobre la Hacienda</span>
						<a href="#!" class="btn dorado activator">ver mas</a>
					</div>
					<div class="card-reveal">
						<span class="card-title cafe-text"><i class="material-icons">close</i></span>
      					<p class="cafe-text">Es ahí donde se encuentra nuestra casa, una estructura de inicios del siglo XX, testigo de la Revolución Mexicana y de la Guerra Cristera; en sus paredes se respira historia. Aquí conocido como Rancho Las Peñitas encontraras un ambiente alteño, por sus valores del trabajo diario y la espiritualidad de una tierra creyente. La vista forma parte del atractivo con sus plantíos de agave y de la tierra roja. Cuidando la historia, el equipo creativo de ingenieros y arquitectos, han hecho los trabajos para cuidar la hacienda, hoy ZB Distillery.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container center">
			<div class="row">
				<div class="col m10 offset-m1 s12">
					<h2 class="cafe-text title bold doble">nuestras marcas</h2>
					<img src="/img/marcas.png" class="responsive-img" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="section black">
		<div class="center">
			<img src="/img/adorno.png" class="responsive-img" width="100px" alt="">
			<h3 class="white-text title">un gran tequila</h3>
			<h4 class="white-text title">necesita un gran proceso</h4>
		</div>
		<div class="banner2"></div>
		<div class="center container section">
			<p class="white-text">En <span class="bold">ZB Distillery</span> contamos con la capacidad productiva de 4 millones de litros anuales, para esto nuestra cadena de suministros ha sido detallada, logrado con esto una mejor producción y productos de mayor calidad.</p>
		</div>
		<div class="row container">
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery1b.jpg" data-caption=""><img src="/img/gallery1.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery2b.jpg" data-caption=""><img src="/img/gallery2.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery3b.jpg" data-caption=""><img src="/img/gallery3.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery4b.jpg" data-caption=""><img src="/img/gallery4.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery5b.jpg" data-caption=""><img src="/img/gallery5.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery6b.jpg" data-caption=""><img src="/img/gallery6.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery7b.jpg" data-caption=""><img src="/img/gallery7.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery8b.jpg" data-caption=""><img src="/img/gallery8.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m4 s12">
				<a data-fancybox="gallery" href="/img/gallery9b.jpg" data-caption=""><img src="/img/gallery9.jpg" class="responsive-img" alt=""></a>
			</div>
		</div>
	</section>
</main>
@endsection

@section('scripts')
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
@endsection