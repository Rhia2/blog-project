@extends('layouts.master')

@section('content')

   
    <div class="col-sm-8 blog-main">
    <a href="/posts/create" class=" btn btn-primary">Create post </a>
    <hr>
        @if(count($posts))
            <div class="panel panel-primary blog-post">
                @foreach($posts as $post)
                <div class="panel-heading blog-post-title">{{ $post->title}}</div>
                <div class="panel-body blog-post-meta">
                    By {{ $post->user->name}} on
                    {{ $post->created_at->toFormattedDateString()}} 

                <p>{{ $post->sub}}</p>
                <a href="/posts/{{$post->id}}">Read More</a>
                </div>
                <hr>
                @endforeach
            </div><!-- /.blog-post -->
        @endif

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
          

        </div><!-- /.blog-main -->

@stop

