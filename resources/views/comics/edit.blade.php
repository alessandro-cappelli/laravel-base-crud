@extends('layouts.base')

@section('title', 'lista prodotti')

@section('content')
    <div class="container">
        <h1>Aggiungi Fumetto {{$comic->title}}</h1>
        
        <form action="{{route("comics.store")}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="inserisci il titolo del fumetto">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <textarea class="form-control" id="description" name="description" placeholder="inserisci la descrizione del fumetto">{{$comic->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="inserisci il link dell`immagine copertina">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}" placeholder="inserisci il prezzo">
            </div>
            <div class="form-group">
                <label for="series">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}" placeholder="inserisci la serie del fumetto">
            </div>
            <div class="form-group">
                <label for="sale_date">sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" placeholder="inserisci la data di vendita">
            </div>
            <div class="form-group">
                <label for="type">tipo di fumetto</label>
                <select class="form-control form-control-md" name="type" id="type">
                    <option value="comic_book" {{$comic->type == "comic_book"? "selected": ""}}>comic book</option>
                    <option value="graphic_novel" {{$comic->type == "graphic_novel"? "selected": ""}}>graphic nobel</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection