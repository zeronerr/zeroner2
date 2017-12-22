@extends('main')

@section('title', '| Все публикации')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Все публикации</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Создать</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
               <thead>
                    <th>#</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Дата публикации</th>
                    <th></th>
               </thead>
               <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date('d-m-y | H:i - A', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">Посмотреть</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Редактировать</a></td>
                        </tr>
                    @endforeach
               </tbody>
            </table>
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@stop