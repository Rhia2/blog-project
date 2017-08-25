<!DOCTYPE html>
    <html>
        <head>
            <title>Model</title>
        </head>
        <body>
            <h1>HELLO model</h1>
            <ul>
                @foreach($works as $value)
                    <li>
                        {{$value->action }} 
                    </li>
                @endforeach
            </ul>
        </body>
    </html>