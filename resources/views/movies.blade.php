<link rel="stylesheet" href={{ asset('/css/edit_create.css') }}>
@extends('layouts.template')

@section('title')
    Movies | Adapti
@endsection


@section('content')
    <div class="content-create">
        <div class="form-search">
            <h1 class='titulo'>Filmes</h1>
            <form action="/movie" method="GET" class="barra-de-pesquisa">
                @csrf
                <input type="search" name="search" placeholder="Pesquisar:" class="input-search" required />
                <button class="btn-search efeito" type="submit"><i class="fa fa-search"></i></button>

            </form>

        </div>
        <div class="movies_layout">
            <div class="flexbox">
                @forelse ($movies as $movie)
                    <div class="card">
                        <div class="edit">
                            <ul>
                                <li>
                                    <form class="btn-edit" action="{{ route('movie.destroy', $movie->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="options " type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </li>
                                <li><a class="btn" href="{{ route('movie.edit', $movie->id) }}"><i
                                            class="fa fa-edit options"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-info">
                            <div class="img-card"><a href="storage/{{ $movie->image }}"><img class="img" src="storage/{{ $movie->image }}" alt="Imagem" width="60"
                                height="100" /></a></div>                                
                            <div class="info">
                                <h3 class="movie-title">{{ $movie->title }}</h3>
                                <p class="text">{{ $movie->genre }}</p>
                                <p class="text"><strong>País: </strong>{{ $movie->country->name }}</p>
                                <p class="text"><strong>Nota: </strong>{{ $movie->rating }}/10</p>
                                <p class="text"><strong>Sinopse: </strong>{{ $movie->synopsis }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    @if ($search)
                        <p class="not-found">Não foi possivel encontrar nenhum filme com: {{ $search }}.
                            <br><a class="inicio btn-nav efeito" href={{ route('movie.index') }}>Exibir todos</a>
                        </p>
                    @else
                        <p class="not-found">Não há filmes cadastrados</p>
                    @endif
                @endforelse
            </div>
        </div>
    </div>
@endsection