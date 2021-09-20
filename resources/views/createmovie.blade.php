<link rel="stylesheet" href={{ asset("/css/edit_create.css") }}>
@extends('layouts.template')

@section('title')
    Create Movies | Adapti
@endsection



@section('content')
    <section class="form-section">
        <form class="form-create" id="form-create" action="{{ route('movie.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <h1 class="titulo-create">Criar Filme</h1>
                <div class="input-box">
                    <div class="inputs">
                        <label for="title">Título:</label><br><input id="title" class="input-title" type="text" name="title"
                         required>
                    </div>

                    <div class="inputs">
                        <label for="genre">Genêro:</label><br><input id="genre" class="input-genre" type="text" name="genre"
                             required>
                    </div>

                    <div class="inputs-select">
                        <label for="country">País:</label><br><select id="country" class="opcao" name="country_id"
                            id="country_id" type="select">
                            @foreach ($countries as $country)
                                <option class="opcao" value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="inputs-select">
                        <label for="release">Data de lançamento:</label><br><input id="release" class="input-date" type="date"
                            name="release"  required>
                    </div>
                    
                    <div class="inputs">
                        <label for="rating">Nota:</label><br><input id="rating" class="input-rating" type="number" name="rating"
                            required>
                    </div>

                    <div class="inputs-select">
                        <label for="sinopse">Sinopse:</label><br><br><textarea style="resize: none" id="sinopse" class="sinopse" name="synopsis"
                            id="synopsis" cols="25" rows="5" maxlength="256"></textarea>
                    </div>

                    <div class="inputs-select">
                        <label for="image">Imagem:</label><br><input id="image" class="input-image" type="file" name="image"
                            accept="image/*" required>
                    </div>
                    <ul class="nav-list">
                        <li><a class="btn-nav efeito" href="{{ route('movie.index') }}">voltar</a></li>
                        <li><button class="btn btn-nav efeito" type="submit">Criar filme</button></li>
                    </ul>
                </div>

        </form>
    </section>
@endsection
