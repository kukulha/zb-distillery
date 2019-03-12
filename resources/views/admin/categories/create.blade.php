@extends('layouts.dashboard')

@section('subtitulo')
	Crear nueva categoría
@endsection

@section('content')
<main class="fixed container">
	<div class="section">
		{{ Form::open(['route' => 'categories.store']) }}
			@include('admin.categories.partials.form')
		{{ Form::close() }}
	</div>
</main>
@endsection