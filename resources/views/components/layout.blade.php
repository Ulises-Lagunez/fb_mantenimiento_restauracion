<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')   
    <title>{{ $titlePage ?? 'title default' }}</title>
</head>
<body class="fondo">    
    @include('partials.nav')
    {{$slot}}
</body>
</html>