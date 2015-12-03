<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    <h1> {{ $prueba->title}}</h1>
       <hr>{{$prueba->content}}
       <hr>{{$prueba->user->name}} | {{$prueba->category->name}} |
       @foreach($prueba->tags as $tag)
        {{$tag->name}} |
       @endforeach
        @for($i =1 ; $i<100;$i++)
            <br>
            {{$i}}
        @endfor
        
        <div class="container">
            <div class="content">
                <div class="title">drawde 5</div>
            </div>
        </div>
    </body>
</html>
