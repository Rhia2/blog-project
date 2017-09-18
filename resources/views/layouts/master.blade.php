<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Refresh" content="900">
            
            <link rel="stylesheet" href="/css/bootstrap.min.css">

             <link href="/css/blog.css" rel="stylesheet">

            <title>My Blog</title>
            
        </head>

        <body>
            @include('layouts.header')

            <div class="container">
                <div class="row">
                    @yield('content')

                    @include('layouts.sidebar')
                </div>
            </div>
            
                @include('layouts.footer')
        </body>

    </html>