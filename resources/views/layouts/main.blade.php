<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- css do bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- css do projeto em si -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <!-- colocar essa classe no nav:  -->
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="collapse navbar-collapse" id="nabvar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" width="50px" alt="HDC Events">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Criar Eventos</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Entrar</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Cadastrar</a></li>
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
