<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinelandia - @yield('pagina_titulo')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

</head>

<body style="background-color: #0A0A0A;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0A0A0A;">
            <div class="container">
                <a class="navbar-brand" href="#"><img style="width:200px; height:70px" src="{{asset('assets/images/logo/Screenshot_2.jpg')}}" alt="Cinelandia"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white" >&#9776</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="{{env('APP_URL')}}/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{env('APP_URL')}}/filmes" tabindex="-1">Filmes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{env('APP_URL')}}/series" tabindex="-1">Séries</a>
                        </li>
                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{env('APP_URL')}}/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{env('APP_URL')}}/register">Registro</a>
                        </li>
                        @endif
                        @if(Auth::check())
                        <?php
                        $id = session('nivel_id');
                        if ($id === 1) {
                        ?>
                            <a class="nav-link text-white" href="{{route('admin')}}" tabindex="-1">Admin</a>
                        <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('login.logout')}}" tabindex="-1">Sair</a>
                        </li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('pagina_conteudo')

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>

</body>

</html>