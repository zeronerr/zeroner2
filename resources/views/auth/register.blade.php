@extends('main')

@section('title', '| Регистрация')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

                {{ Form::label('name', "Имя: ") }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::label('email', "Email:") }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}

                {{ Form::label('password', 'Пароль:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}

                {{ Form::label('password_confirmation', 'Подтверждение пароля:') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

                {{ Form::submit('Регистрация', ['class' => 'btn btn-primary btn-block form-control form-spacing-top']) }}


            {!! Form::close() !!}
        </div>
    </div>
@endsection