<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/internal_css/home.css">
    <link rel="stylesheet" href="styles/components.css">
    <link rel="stylesheet" href="styles/layouts_css/lay_logged.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_logged')
    @section('content')
    <main>
        <div class="posts">
        @foreach($posts as $post)
        <x-card nameuser="{{$post->name}}" imgposts="/img/products/{{$post->img_path}}" imguser="{{$post->name}}" title="{{$post->nm_title}}" text="{{$post->txt}}" likes="2" favorited=2 />
        @endforeach
        </div>
    </main>

 
    
    @endsection
</body>
</html>