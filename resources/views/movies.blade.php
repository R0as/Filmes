@extends('layouts.template')

@section('title')
    Movies | Adapti
@endsection


@section('content')
    <div class = "content">        
        <form action="/movie" method="GET" class="form">
            @csrf
            <input type="text"  name="search" placeholder="Pesquisar:"class="input" required/>
            <button class="btn" type="submit">Pesquisar</button>
        </form>
        
        @foreach ($movies as $movie)
        <div class="card">
            <h3>{{ $movie->title }}</h3>
            <div>
                <a class="btn" href="{{ route('movie.edit', $movie->id) }}">Editar</a>
                <form class = "form" action="{{ route('movie.destroy',$movie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit">Apagar</button>
                </form>  
            </div>      
        
        <img class = "img"src="storage/{{ $movie->image }}" alt="Imagem" width="60" height="100"/>        
        
        <div class = "info">
            <p>{{ $movie->genre }}</p>
            <p><strong>Pais::</strong>{{ $movie->country->name }}</p>
            <p><strong>Nota:</strong>{{ $movie->rating }}</p>
            <p><strong>Sinopse:</strong>{{ $movie->synopsis }}</p>
            <p><strong>Título:</strong>{{ $movie->title }}</p>
        </div>    
    </div>     
        @endforeach 
    </div>
@endsection