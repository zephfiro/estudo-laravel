<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <h1>Home</h1>
        @if (10>5)
            <p>verdade</p>
        @endif
        <p>{{ $nome }} tem {{ $idade }}</p>
        <br>
        @for ($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }}</p>
        @endfor
        
        @php
            $name = "Ricas";
            echo $name;
            echo $nome;
        @endphp

        @foreach($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
        @endforeach
    </body>
</html>
