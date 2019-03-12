@extends('layouts.dashboard')

@section('subtitulo')
	Editar articulo
@endsection

@section('content')
<main class="fixed container">
	<div class="section">
		{{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' =>'PUT', 'files' => 'true']) }}
			@include('admin.posts.partials.form')
		{{ Form::close() }}
	</div>
</main>
@endsection