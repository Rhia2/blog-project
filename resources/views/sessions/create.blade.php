@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Sign in</h1>
        @include('layouts.errors')
        <form action="/login" method="Post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="Name">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="Name">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>



            <button type="submit" class="btn btn-primary">Log in</button>
            
        </form>
    </div>


@endsection