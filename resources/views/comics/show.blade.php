@extends('layouts.base')

@section('title', 'prodotto')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{!! $comic->description !!}</p>
    <img src="{{ $comic->thumb }}">

    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">Eutanizza</button>
    </form>

    <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">back</button></a>
@endsection
