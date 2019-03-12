@extends('layouts.dashboard')

@section('subtitulo')
Articulos
@endsection

@section('content')

<main class="fixed container section">
	<div class="card-panel z-depth-0">
		<div class="right">
			<a href="{{ route('posts.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
		</div>
		<div class="center">
			<table class="centered">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Extracto</th>
						<th colspan="3">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{{ $post->name }}</td>
							<td>{{ $post->excerpt }}</td>
							<td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn orange lighten-5 orange-text text-darken-4">Editar</a></td>
							<td width="10px">
								{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
									{{ Form::submit('Eliminar', ['class' => 'btn red lighten-5 red-text text-darken-4']) }}
								{!! Form::close() !!}
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $posts->links('pagination::default') }}
		</div>
	</div>
</main>
@endsection