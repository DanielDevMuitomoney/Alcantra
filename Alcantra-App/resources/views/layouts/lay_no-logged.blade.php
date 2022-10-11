<header>
        <a href = "/"><img id="img-logo" src="img-ideias/logo png.png"></a>
        <nav>
            <a>Sobre</a>
            <a>Proteção</a>
            <a>Comunidade</a>
        </nav>
        <div>
            <a href="{{route('user.register')}}"><button class="btn-register">Cadastrar</button></a>
            <a href="{{route('user.login')}}"><button  class="btn-entrar">Entrar</button></a>
        </div>
    </header>

    @yield('content')