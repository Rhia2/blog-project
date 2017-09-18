@extends('layouts.master')

@section('content')

   
    <div class="col-sm-8 blog-main">
        <div style="border:3px;">
            <h1>{{$post->title}}</h1>
            <h3>{{$post->sub}}</h3>
            <p>{{$post->body}}</p>
        </div>

        </hr>

   @if(count($post->comment))
    <div class="comment">
        <h2>Comments</h2>
        <ul>
        @foreach($post->comment as $comment)
            <li class="list-group-item">
                <strong>{{$comment->created_at->diffForHumans()}} by {{$comment->name}}: &nbsp</strong>
                 {{$comment->body}}
            </li>
        @endforeach
        </ul>
    </div>
    @endif

    </hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{$post->id}}/comments" style="padding:5px;">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <textarea class="form-control" placeholder="input comment" name="body"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a Comment</button>
                </div>
            </form>
        </div>
    </div>
    <br>

    <h5><a href="/posts">Home</a></h5>
</div>
    
@stop