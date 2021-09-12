<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header class="navbar">
        <h1 class="logo">Filmes do ben10 @yield('botoes')</h1>
        <h2 class="acoes">@yield('action')</h2>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="footer">
        <p class = "footer_text">Adapti soluções</p>
    </footer>
</body>
</html>