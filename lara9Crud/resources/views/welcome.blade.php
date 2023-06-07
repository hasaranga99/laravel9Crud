<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome Home button</title>
        <link rel="stylesheet" href="{{asset('CSS/btn.css')}}"/>
    </head>
    <body>
        <a href="/student-list" class="btn">Login</a>
    </body>
</html>
