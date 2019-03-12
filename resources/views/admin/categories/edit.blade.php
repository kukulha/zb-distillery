@extends('layouts.dashboard')

@section('subtitulo')
	Editar categoría
@endsection

@section('content')
<main class="fixed container">
	<div class="section">
		{{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' =>'PUT']) }}
			@include('admin.categories.partials.form')
		{{ Form::close() }}
	</div>
</main>
@endsection