@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <p>{!!$comic->description!!}</p>
        <p>{!!$comic->thumb!!}</p>
        <p>{!!$comic->price!!}</p>
        <p>{!!$comic->series!!}</p>
        <p>{!!$comic->sale_date!!}</p>
        <p>{!!$comic->type!!}</p>

        <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">cancella</button>
        </form>

        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
    </div>
@endsection