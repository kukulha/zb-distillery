@extends('layouts.dashboard')

@section('subtitulo')
	Crear nueva etiqueta
@endsection

@section('content')
<main class="fixed container">
	<div class="section">
		{{ Form::open(['route' => 'tags.store']) }}
			@include('admin.tags.partials.form')
		{{ Form::close() }}
	</div>
</main>
@endsection