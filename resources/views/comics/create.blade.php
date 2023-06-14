@extends('layouts.app')

@section('content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                placeholder="Scrivi qui il titolo" value="{{ old('title') }}" required aria-describedby="titleHlper">
        </div>
        <div>
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                placeholder="Aggiungi qui l'immagine" value="{{ old('thumb') }}" aria-describedby="titleHlper">
        </div>
        <div>
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description"
                class="form-control @error('description') is-invalid @enderror" placeholder="Scrivi qui la descrizione"
                value="{{ old('description') }}" aria-describedby="titleHlper">
        </div>
        <div>
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                placeholder="Scrivi qui la descrizione" value="{{ old('price') }}" aria-describedby="titleHlper">
        </div>
        <div>
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
                placeholder="Scrivi qui la descrizione" value="{{ old('series') }}" aria-describedby="titleHlper">
        </div>
        <div>
            <label for="sale_data" class="form-label">Sale Data</label>
            <input type="text" name="sale_data" id="sale_data"
                class="form-control @error('sale_data') is-invalid @enderror" placeholder="Scrivi qui la descrizione"
                value="{{ old('sale_data') }}" aria-describedby="titleHlper">
        </div>
        <div>
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                placeholder="Scrivi qui la descrizione" value="{{ old('type') }}" aria-describedby="titleHlper">
        </div>

        <button class="btn btn-primary" type="submit">Aggiungi fumetto</button>
    </form>
@endsection