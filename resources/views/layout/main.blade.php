<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>


    </head>
    <body >

        <header>
            <nav class='navbar navbar-expand-lg navbar-light'>
                <div class="collape navbar-collapse" id="navbar">
                    <a href="" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">
                                Criar Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Entrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Cadastrar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')
        <footer>
            <p>HDC Events &copy; 2024</p>
        </footer>
    </body>
</html>
