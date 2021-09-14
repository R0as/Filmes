<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: "IBM+Plex+Sans+Arabic";
        }
    </style>

</head>
<body>
    <header class="header">
        <h6>Filmes do ben10</h6>
        <nav class = "navbar">
            <ul class = "list">
                <li><a class="btn-submit" href="{{ route('movie.index') }}">Inicio</a></li>
                <li> <a class="btn-submit" href="{{ route('movie.create') }}">Adicionar Filmes</a></li>
            </ul> 
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="footer">
        <p class = "footer_text">Adapti soluções</p>
    </footer>
</body>
</html>