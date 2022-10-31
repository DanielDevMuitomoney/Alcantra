<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/internal_css/create-post.css">
    <link rel="stylesheet" href="styles/layouts_css/lay_logged.css">
    <title>Criar Post</title>
</head>
<body>
@extends('layouts.lay_logged')

@section('content')
    <main>
        <section class="form-section">
            <h1 class="title">Criar Post</h1>
            <form method="POST"  class="form-create-post" enctype="multipart/form-data" action="{{route('action.create.post')}}">
                <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}" />
                <label for="Titulo do post" >Title</label>
                <input id="title" type="text" name="title">
                <label for="Descrição">Description</label>
                <textarea name="desc" id="description"></textarea>
                <input name="img" id="img-post" type="file">
                <button type="submit" id="btn-create-post" class="btn-create-post">POSTAR</button>
            </form>
        </section>
    </main>

    <script src="js/post_js/create_post.js"></script>
    @endsection
</body>
</html>