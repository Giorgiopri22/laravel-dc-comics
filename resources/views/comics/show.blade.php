@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="details">
                <h1>{{ 'Titolo: ' . $comic->title }}</h1>
                <h5>{{ 'Descrizione: ' . $comic->description }}</h5>
                <h5>{{ 'Prezzo: ' . $comic->price . '€' }}</h5>
                <h5>{{ 'Serie: ' . $comic->series }}</h5>
                <h5>{{ 'Data d/uscita: ' . $comic->sale_date }}</h5>
                <h5>{{ 'Tipo: ' . $comic->type }}</h5>
            </div>
        </div>
    </div>
@endsection