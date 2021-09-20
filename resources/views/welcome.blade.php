<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmes do Ben10</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('/css/welcome.css') }}>

    <style>
        * {
            font-family: "Ubuntu";
        }

    </style>
</head>

<body class="body">
    <a href="{{ route('movie.index') }}"> <img class="logo" src="{{ asset('img/titulo.png') }}"
            alt="omnitrix"></a>
    <div class="boas_vindas">
        <h1>Bem-vindo ao filmes do ben10</h1>
        <h2>clique na logo para ser redirecionado ao catálogo de filmes</h2>
    </div>
</body>
</html>
