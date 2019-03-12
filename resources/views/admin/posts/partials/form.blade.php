{{ Form::hidden('user_id' , auth()->user()->id) }}

<div class="input-field">
	{{ Form::label('name' , 'Titulo del articulo') }}
	{{ Form::text('name' , null , ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug' , 'URL') }}
	{{ Form::text('slug' , null , ['id' => 'slug']) }}
</div>

<div class="file-field field-input">
		<div class="btn dorado">
			<span>Imagen</span>
			{{ Form::file('file', null) }}	
		</div>
		<div class="file-path-wrapper">
			{{ Form::text('file', null ,['class' => 'file-path'])}}
		</div>
	</div>

<div class="input-field">
	{{ Form::label('status', 'Estatus')}}
	<br>
	<p>
	<label >
		{{ Form::radio('status', 'PUBLISHED') }}
		<span>Publicado</span>
	</label>
	</p>
	<p>
	<label >
		{{ Form::radio('status', 'DRAFT') }}
		<span>Borrador</span>
	</label>
	</p>
</div>

<div class="input-field">
	{{ Form::label('excerpt', 'Extracto') }}
	{{ Form::textarea('excerpt', null, ['data-length' => '144', 'class' => 'materialize-textarea']) }}	
</div>

<div class="input-field">
	{{ Form::label('tags', 'Etiquetas(Palabras separadas por comas)') }}
	{{ Form::text('tags', null  , ['data-role' => 'materialtags']) }}
</div>

<div class="input-field">
	{{ Form::label('category_id', 'Categoria')}}
	<br><br>
	<div>
	@foreach ($categories as $category)
		<p style="display:inline;">
		<label >
			{{ Form::radio('category_id', $category->id ) }}
			<span>{{ $category->name}}</span>
		</label>
		</p>
	@endforeach
	</div>
</div>

<div class="input-field">
	{{ Form::label('body' , 'Contenido') }}
	{{ Form::textarea('body' , null , ['class' => 'materialize-textarea' ]) }}
</div>

<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn cafe ']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			ClassicEditor
        		.create( document.querySelector( '#body' ) )
        		.catch( error => {
            	console.error( error );
        	} );


		});
	</script>
@endsection