@extends('main')

@section('title', '| Войти')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}

                {{ Form::label('password', "Пароль:") }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            <br>
                {{ Form::checkbox('remember') }} {{ Form::label('remember', 'Запомнить меня?') }}
            <br>
                {{ Form::submit('Войти', ['class' => 'btn btn-primary btn-block']) }}

                <p><a href="{{ url('password/reset') }}">Забыли пароль?</a></p>

            {!! Form::close() !!}
        </div>
    </div>

@endsection