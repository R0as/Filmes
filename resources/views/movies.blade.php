@extends('template')

@section('title')
    Movies | Adapti
@endsection

@section('botoes')
    <a class="btn" href="{{ route('movie.create') }}"><button>Criar Filme</button></a>  
    <a class="btn" href="{{ route('movie.index') }}"><button>Inicio</button></a>
@endsection

@section('content')
    <div class = "content">        
        <form action="/movie" method="GET" class="form">
            @csrf
            <input type="text"  name="search" placeholder="Pesquisar:"class="input" required/>
            <button class="btn" type="submit">Pesquisar</button>
        </form>
        @foreach ($movies as $movie)
            <h4 class = "nome">{{ $movie->title }}</h4>
            <p class="pais">{{$movie->country->name}}</p>
            <img class = "img"src="storage/{{ $movie->image }}" alt="Imagem" width="60" height="100"/>
            <a class="btn" href="{{ route('movie.edit', $movie->id) }}"><button>Editar</button></a>
            <form class = "form" action="{{ route('movie.destroy',$movie->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn" type="submit">Apagar</button>
            </form>
        @endforeach 
    </div>
@endsection