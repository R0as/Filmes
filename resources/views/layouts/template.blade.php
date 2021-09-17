<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link  rel="shortcut icon" href="{{ asset("img/logo.ico") }}">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset("/css/reset.css") }}>
    <link rel="stylesheet" href={{ asset("/css/styles.css") }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        * {
            font-family: "Ubuntu";
        }

    </style>

</head>

<body>
    <header class="header">
        <nav class="navbar">
               <a href="{{ route('movie.index') }}"> <img class="logo" src="{{ asset("img/titulo.png") }}" alt="omnitrix" ></a>    
            
            <ul class="nav-list">
                <li><a class="btn-nav efeito" href="{{ route('movie.index') }}">Início</a></li>
                <li> <a class="btn-nav efeito" href="{{ route('movie.create') }}">novo filme</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        <div class="footer-card">
            <div class="footer-content">
                <h3 class="footer_text">Ben10 soluções</h3>
                <ul class="socials">
                    <li><a target="_blank"href="https://www.instagram.com/henriqueroas__/"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://github.com/R0as"><i class="fa fa-github"></i></a></li>
                    <li><a target="_blank"href="https://twitter.com/henriqueroas"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2021 Adaptips. designed by <span>Henrique Roas</span></p>
            </div>
        </div>
    </footer>
</body>

</html>
