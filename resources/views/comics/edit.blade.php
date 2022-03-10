@extends('layouts.base')

@section('title', 'lista prodotti')

@section('content')

    <h1>Aggiorna il fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome del fumetto"
                value={{ $comic->title }}>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description"
                placeholder="Inserisci la descrizione del prodotto" value={{ $comic->description }}></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" id="cooking_time" name="cooking_time" placeholder="Inserisci"
                value={{ $comic->thumb }}>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="weight" name="weight" placeholder="Inserisci"
                value={{ $comic->price }}>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="number" class="form-control" id="weight" name="weight" placeholder="Inserisci"
                value={{ $comic->series }}>
        </div>
        <div class="form-group">
            <label for="sale_date">Anno</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci"
                value={{ $comic->sale_date }}>
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci"
                value={{ $comic->type }}>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
