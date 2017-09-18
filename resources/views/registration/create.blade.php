@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Register</h1>
        @include('layouts.errors')
        <form action="/register" method="Post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="Name">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="Name">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="Name">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>


            <button type="submit" class="btn btn-primary">Register</button>
            <a href="/login">Login</a>
            
        </form>
    </div>


@endsection