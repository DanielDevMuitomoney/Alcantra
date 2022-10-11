<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/layouts_css/lay_css-no-logged.css">
    <title>Posts app login</title>
</head>
<body>

@extends('layouts.lay_no-logged')
@section('content')


    <h1>Bem vindo!</h1>

<main id="principal">
    <section id="container">
        <form class="flex-container"  >
            <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}" />
            <input placeholder="Nome" type="text" name="name" id="name">
            <input placeholder="Email" type="text" name="email" id="email">
            <input placeholder="senha" type="password" name="password" id="password">
            <input placeholder="confirmar senha" type="password" name="password2" id="">
            <button type="button" id="btn_register_form" class="btn-register">Entrar</button>
            <a class="link" href="{{route('user.login')}}">Já tem um conta?Clique Aqui</a>
        </form>
        <img id="img-login" src="img-ideias/i6.gif" alt="Gif de login">
    </section>

    <script src="js\crud\register.js"></script>
@endsection
    
</main>
</body>
</html>