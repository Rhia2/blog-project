<!DOCTYPE html>
    <html>
        <head>
            <title>id checker</title>
        </head>
        <body>
            <h1> These are your tasks for this morning: </h1>
            <ol>
                @foreach($tasks as $value)
                    <li>
                        <a href="/tasks/{{$value->id}}">{{$value->body }} </a>
                    </li>
                @endforeach
            </ol>
        </body>
    </html>