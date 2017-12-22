@extends('main')

@section('title', '| Редактировать')

@section('content')

    <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

        <div class="col-md-8">
            {{ Form::label('title', 'Заголовок:') }}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

           {{--  {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}

            {{ Form::label('category_id', "Категория:", ['class' => 'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
 --}}
            {{ Form::label('body', 'Текст публикации:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Дата публикации:</dt>
                    <dd>{{date('d-m-y | H:i - A', strtotime($post->created_at->timezone('Europe/Kiev'))) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Дата обновления:</dt>
                    <dd>{{date('d-m-y | H:i - A', strtotime($post->updated_at->timezone('Europe/Kiev'))) }}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Отменить', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Сохранить', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div> <!-- end of .row (form) -->

@stop