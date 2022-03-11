@extends('layouts.base')

@section('title', 'lista prodotti')

@section('content')
    <div class="container">
        <h1>Aggiungi Fumetto</h1>
        
        <form action="{{route("comics.store")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo del fumetto">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="textarea" class="form-control" id="description" name="description" placeholder="inserisci la descrizione del fumetto">
            </div>
            <div class="form-group">
                <label for="thumb">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserisci il link dell`immagine copertina">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="price" name="price" placeholder="inserisci il prezzo">
            </div>
            <div class="form-group">
                <label for="series">series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="inserisci la serie del fumetto">
            </div>
            <div class="form-group">
                <label for="sale_date">sale date</label>
                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="sale_date" name="sale_date" placeholder="inserisci la data di vendita">
            </div>
            <div class="form-group">
                <label for="type">tipo di fumetto</label>
                <select class="form-control form-control-md" name="type" id="type">
                    <option value="comic_book">comic book</option>
                    <option value="graphic_novel">graphic nobel</option>
                </select>
            </div>
        </form>
    </div>
@endsection
    
