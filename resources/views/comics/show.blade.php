@extends('layouts.base')

@section('content')
    <h1>{{$comic->name}}</h1>
    <p>{!!$product->description!!}</p>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
@endsection