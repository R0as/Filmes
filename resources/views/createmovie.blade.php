@extends('template')

@section('title')
    Create Movies | Adapti
@endsection


@section('action')
    <h2>Criar filme</h2>
@endsection

@section('botoes')
    <a class="btn" href="{{ route('movie.index') }}"><button>Inicio</button></a>
@endsection

@section('content')
    <form class="form" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="input" type="text" name="title" placeholder="Título"required>
        <input class="input" type="text" name="genre" placeholder="Genero"required>
        <select class = "opcao" name="country_id" id="country_id">
            @foreach($countries as $country)
                <option class = "opcao" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input class="input" type="text" name="release" placeholder="Data de lançamento"required>
        <input class="input" type="text" name="rating" placeholder="nota"required>
        <textarea class = "sinopse" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input class="input" type="file" name="image" accept="image/*" required>
        <button class="btn" type="submit">Salvar</button>        
    </form>
@endsection