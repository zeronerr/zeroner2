@extends('main')

@section('title', '| Homepage')

@section('content')

  
       <div class="row">
           <div class="col-md-12">
               <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p class="lead">Ololo</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                </div>
           </div>
       </div> <!-- end of header -->
       <div class="row">
           <div class="col-md-8">
            
            @foreach($posts as $post)
            
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <a href="#" class="btn btn-primary">Read more
            </div>

              <hr>

              @endforeach
           </div>

           <div class="col-md-3 col-md-offset-1">Sidebar
           </div>
       </div>
   
@endsection
    