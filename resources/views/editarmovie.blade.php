<link rel="stylesheet" href={{ asset('/css/edit_create.css') }}>
@extends('layouts.template')

@section('title')
    Edit Movies | Adapti
@endsection



@section('content')
    <section class="form-section">
        <form class="form-create" action="{{ route('movie.update', $movie->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="titulo-create">Editar Filme</h1>
            <div class="input-box">
                <div class="inputs">
                    <label for="title">Título:</label><br><input id="title" class="input-edit"
                        value="{{ $movie->title }}" type="text" name="title" placeholder="Título" required>
                </div>

                <div class="inputs">
                    <label for="genre">Genêro:</label><br>
                    <input id="genre " class="input-edit" value="{{ $movie->genre }}" type="text" name="genre"
                        placeholder="Genero" required>
                </div>

                <div class="inputs-select">
                    <label for="country">País:</label><br>
                    <select id="country" class="opcao" value="" name="country_id">
                        @foreach ($countries as $country)
                            <option class="opcao" {{ $country->id==$movie->country_id ? 'selected': '' }} value="{{ $country->id }}">{{ $country->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="inputs-select">
                    <label for="release">Data de lançamento:</label><br>
                    <input id="release" class="input-edit" value="{{ $movie->release }}" type="date" name="release"
                        placeholder="Data de lançamento" required>
                </div>

                <div class="inputs">
                    <label for="rating">Nota:</label><br>
                    <input id="rating" class="input-edit" value="{{ $movie->rating }}" type="number" name="rating"
                        placeholder="nota" required>
                </div>

                <div class="inputs-select">
                    <label for="sinopse">Sinopse:</label><br>
                    <textarea style="resize: none" id="sinopse" class="sinopse" name="synopsis" cols="30"
                        rows="10" maxlength="256">{{ $movie->synopsis }}</textarea>
                </div>

                <div class="inputs-select">
                    <label for="image">Imagem:</label><br>
                    <input id="image" input="input-edit" value="storage/{{ $movie->image }}" type="file" name="image"
                        accept="image/*">
                    <img src="/storage/{{ $movie->image }}" style="width:100px;height:100px;"
                        alt="poster do filme {{ $movie->title }}">
                </div>
                
                <div class="button-inputs">
                    <ul class="nav-list">
                        <li><form action="" method="POST" enctype="multipart/form-data"action="{{ route('movie.update', $movie->id) }}">
                            @method('PUT')
                            <button class="btn btn-nav efeito" type="submit"action="{{ route('movie.update', $movie->id) }}">Editar filme</button>
                        </form></li>
                        <li>
                            <form class="form" action="{{ route('movie.destroy', $movie->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-nav efeito" type="submit">Apagar filme</button>
                            </form>
                        </li>
                        <li><a class="btn-nav efeito" href="{{ route('movie.index') }}">voltar</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
@endsection
