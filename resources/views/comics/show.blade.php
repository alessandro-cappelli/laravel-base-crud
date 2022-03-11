@extends('layouts.base')

@section('content')
    <h1>{{$comic->title}}</h1>
    <p>{!!$comic->description!!}</p>
    <p>{!!$comic->thumb!!}</p>
    <p>{!!$comic->price!!}</p>
    <p>{!!$comic->series!!}</p>
    <p>{!!$comic->sale_date!!}</p>
    <p>{!!$comic->type!!}</p>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
@endsection