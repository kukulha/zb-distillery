@extends('layouts.dashboard')

@section('subtitulo')
Categorías
@endsection

@section('content')

<main class="fixed container section">
	<div class="card-panel z-depth-0">
		<div class="right">
			<a href="{{ route('categories.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
		</div>
		<div class="center">
			<table class="centered">
				<thead>
					<tr>
						<th>Categoría</th>
						<th colspan="3">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->name }}</td>
							<td width="10px"><a href="{{ route('categories.edit', $category->id) }}" class="btn orange lighten-5 orange-text text-darken-4">Editar</a></td>
							<td width="10px">
								{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
									{{ Form::submit('Eliminar', ['class' => 'btn red lighten-5 red-text text-darken-4']) }}
								{!! Form::close() !!}
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $categories->links('pagination::default') }}
		</div>
	</div>
</main>
@endsection