@extends('layouts.template')

@section('title')
    Edit Movies | Adapti
@endsection



@section('content')
<section class="form-section">
    <form class="form" action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input id="title"class = "input-edit" value="{{$movie->title}}" type="text" name="title" placeholder="Título"required >
        
        <label for="genre">Genêro:</label>
        <input id = "genre "class = "input-edit" value="{{$movie->genre}}"type="text" name="genre" placeholder="Genero"required>
        
        <label for="country">País:</label>
        <select id="country" class = "opcao" value="{{$movie->country_id}}"name="country_id" >
            @foreach($countries as $country)
                <option class = "opcao" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        
        <label for="release">Data de lançamento:</label>
        <input id="release" class = "input-edit" value="{{$movie->release}}"type="text" name="release" placeholder="Data de lançamento"required>
        
        <label for="rating">Nota:</label>
        <input id="rating"class = "input-edit" value="{{$movie->rating}}"type="text" name="rating" placeholder="nota"required>
        
        <label for="sinopse">Sinopse:</label>
        <textarea id= "sinopse" class = "sinopse" name="synopsis"  cols="30" rows="10">{{$movie->synopsis}}</textarea>
        
        <label for="image">Imagem:</label>
        <input id="image" input="input-edit"value="storage/{{ $movie->image }}"type="file" name="image" accept="image/*">
        <img src="/storage/{{ $movie->image }}" style="width:100px;height:100px;" alt="poster do filme {{$movie->title}}">
        <button class="btn-submit"type="submit">Editar filme</button>
        <a class="btn-back-form" href="{{ route('movie.index') }}">voltar</a>
    </form>
    <form class = "form" action="{{ route('movie.destroy',$movie->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn" type="submit">Apagar</button>
    </form>
</section>
@endsection