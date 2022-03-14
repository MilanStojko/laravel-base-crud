@extends('layouts.base')

@section('title')

@section('content')

    <h1>Aggiorna il fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del fumetto"
                value={{ old('title') ?? $comic->title }}>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description"
                placeholder="Inserisci la descrizione del prodotto"
                value={{ old('description') ?? $comic->description }}></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci"
                value={{ old('thumb') ?? $comic->thumb }}>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci"
                value={{ old('price') ?? $comic->price }}>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="number" class="form-control" id="series" name="series" placeholder="Inserisci"
                value={{ old('series') ?? $comic->series }}>
        </div>
        <div class="form-group">
            <label for="sale_date">Anno</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci"
                value={{ old('sale_date') ?? $comic->sale_date }}>
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci"
                value={{ old('type') ?? $comic->type }}>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
