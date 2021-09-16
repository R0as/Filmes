@extends('layouts.template')

@section('title')
    Create Movies | Adapti
@endsection



@section('content')
<section class="form-section">
    <form class="form" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Título:</label>
        <input id = "title"class="input-create" type="text" name="title" placeholder="Título"required>
        
        <label for="genre">Genêro:</label>
        <input id = "genre" class="input-create" type="text" name="genre" placeholder="Genero"required>
        
        <label for="country">País:</label>
        <select id="country" class = "opcao" name="country_id" id="country_id">
            @foreach($countries as $country)
                <option class = "opcao" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>

        <label for="release">Data de lançamento:</label>
        <input id="release" class="input-create" type="date" name="release" placeholder="Data de lançamento"required>
        
        <label for="rating">Nota:</label>
        <input id="rating" class="input-create" type="text" name="rating" placeholder="nota"required>
        
        <label for="sinopse">Sinopse:</label>
        <textarea id= "sinopse" class = "sinopse" name="synopsis" id="synopsis" cols="25" rows="5"></textarea>
        
        <label for="image">Imagem:</label>
        <input id="image" class="input-create" type="file" name="image" accept="image/*" required>
        <button class="btn-submit" type="submit">Criar filme</button>  
        <a class="btn-back-form" href="{{ route('movie.index') }}">voltar</a>       
    </form>
</section>
@endsection