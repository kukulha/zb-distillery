@extends('layouts.dashboard')

@section('subtitulo')
Etiquetas
@endsection

@section('content')

<main class="fixed container section">
	<div class="card-panel z-depth-0">
		<div class="right">
			<a href="{{ route('tags.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
		</div>
		<div class="center">
			<table class="centered">
				<thead>
					<tr>
						<th>Etiqueta</th>
						<th colspan="3">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags as $tag)
						<tr>
							<td>{{ $tag->name }}</td>
							<td width="10px"><a href="{{ route('tags.edit', $tag->id) }}" class="btn orange lighten-5 orange-text text-darken-4">Editar</a></td>
							<td width="10px">
								{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
									{{ Form::submit('Eliminar', ['class' => 'btn red lighten-5 red-text text-darken-4']) }}
								{!! Form::close() !!}
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $tags->links('pagination::default') }}
		</div>
	</div>
</main>
@endsection