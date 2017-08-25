<!DOCTYPE html>
    <html>
        <head>
            <title>About us</title>
        </head>
        <body>
            <h1>HELLO Laravel</h1>
             <pre><code>Example code block</code></pre>
            <ul>
                @foreach($works as $value)
                    <li>
                        {{$value->body }} 
                    </li>
                @endforeach
            </ul>
        </body>
    </html>
