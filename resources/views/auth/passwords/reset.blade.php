@extends('main')

@section('title', '| Забыли пароль?')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Изменить пароль</div>

                <div class="panel-body">

                    {!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}

                    {{ Form::hidden('token', $token) }}

                    {{ Form::label('email', 'Email Address:') }}
                    {{ Form::email('email', $email, ['class' => 'form-control']) }}

                    {{ Form::label('Пароль', 'Новый пароль:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}

                    {{ Form::label('password_confirmation', 'Подтверждение пароля:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

                    {{ Form::submit('Изменить пароль', ['class' => 'btn btn-primary']) }}

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection