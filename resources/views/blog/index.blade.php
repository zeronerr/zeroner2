@extends('main')

@section('title', '| Blog')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Публикации</h1>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $post->title }}</h2>
            <h5>Дата публикации: {{ date('d-m-y | H:i - A', strtotime($post->created_at->timezone('Europe/Kiev'))) }}</h5>

            <p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) > 250 ? '...' : "" }}</p>
            <p><strong>Категория: {{ $post->category->name }}</strong></p>
            <a href="{{ route('blog.single', $post->id) }} " class="btn btn-primary">Читать дальше</a>
            <hr>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection