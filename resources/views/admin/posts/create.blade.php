@extends('layouts.dashboard')

@section('subtitulo')
	Crear nuevo artículo
@endsection

@section('content')
<main class="fixed container">
	<div class="section">
		{{ Form::open(['route' => 'posts.store', 'files' => 'true']) }}
			@include('admin.posts.partials.form')
		{{ Form::close() }}
	</div>
</main>
@endsection