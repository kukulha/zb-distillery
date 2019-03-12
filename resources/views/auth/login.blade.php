@extends('layouts.app')

@section('content')
<div class="container row section">
    <div class="card-panel z-depth-0 center col m10 offset-m1 s12">
        <span class="card-title title cafe-text "><h2>Login</h2></span>
        <div class="card-content">
            {{ Form::open(['route' => 'login']) }}
                <div class="input-field">
                    {{ Form::label('email', 'Correo Electrónico') }}
                    {{ Form::text('email', null) }}
                </div>
                <div class="input-field">
                    {{ Form::label('password', 'Contraseña') }}
                    {{ Form::password('password', null) }}
                </div>
                <div class="input-field">
                    <p class="left-align">
                        <label>
                            {{ Form::checkbox('remember', null, ['id' => 'remember']) }}
                            <span>Recuerdame</span>
                        </label>
                    </p>
                </div>
                <div class="input-field">
                    {{ Form::submit('Login', ['class' => 'btn cafe'])}}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
