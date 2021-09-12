@extends('template')

@section('title')
    Edit Movies | Adapti
@endsection

@section('action')
    <h2 class ="sub" >Editar filme</h2>
@endsection

@section('botoes')
    <a class="btn" href="{{ route('movie.create') }}"><button>Criar Filme</button></a>  
    <a class="btn" href="{{ route('movie.index') }}"><button>Inicio</button></a>
@endsection

@section('content')
    <form class="form" action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input class = "input" value="{{$movie->title}}" type="text" name="title" placeholder="Título"required >
        <input class = "input" value="{{$movie->genre}}"type="text" name="genre" placeholder="Genero"required>
        <select class = "opcao" value="{{$movie->country_id}}"name="country_id" >
            @foreach($countries as $country)
                <option class = "opcao" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input class = "input" value="{{$movie->release}}"type="text" name="release" placeholder="Data de lançamento"required>
        <input class = "input" value="{{$movie->rating}}"type="text" name="rating" placeholder="nota"required>
        <textarea class = "sinopse" name="synopsis"  cols="30" rows="10">{{$movie->synopsis}}</textarea>
        <input input="input"value="storage/{{ $movie->image }}"type="file" name="image" accept="image/*">
        <button class="btn"type="submit">Salvar</button>
    </form>
@endsection