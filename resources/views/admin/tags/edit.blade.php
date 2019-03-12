@extends('layouts.dashboard')

@section('subtitulo')
	Editar etiqueta
@endsection

@section('content')
<main class="fixed container">
	<div class="section">
		{{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}
			@include('admin.tags.partials.form')
		{{ Form::close() }}
	</div>
</main>
@endsection