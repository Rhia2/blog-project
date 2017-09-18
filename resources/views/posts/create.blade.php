@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Create A Post</h1>
        @include('layouts.errors')
        <form action="/posts" method="Post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="title">Sub Heading</label>
                <input type="text" class="form-control" id="sub" name="sub">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
            <a href="/posts" class="btn btn-primary">Back to Post</a>
        </form>
    </div>


@stop