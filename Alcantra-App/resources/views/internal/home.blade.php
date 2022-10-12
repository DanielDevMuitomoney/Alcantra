<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/layouts_css/lay_logged.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_logged')

    @section('content')
        @for ($i = 0; $i <= 5; $i++)
        <x-card title="{{$i}}"/>
        @endfor
    
    @endsection
</body>
</html>