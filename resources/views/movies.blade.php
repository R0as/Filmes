<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>  
    <a href="{{ route('movie.index') }}"><button>Voltar para a página inicial</button></a>
    <form action="/movie" method="GET">
        @csrf
        <input type="text" id ="search" name="search" placeholder="Pesquisar:"class="form-control" required/>
        <button type="submit">Pesquisar</button>
    </form>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <p>{{$movie->country->name}}</p>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="60" height="100"/>
        <a href="{{ route('movie.edit', $movie->id) }}"><button>Editar</button></a>
        <form action="{{ route('movie.destroy',$movie->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
        </form>
    @endforeach    
</body>
</html>