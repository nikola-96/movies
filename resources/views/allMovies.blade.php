@extends('master')


@section('title', 'All Movies')

@section('body')
<ul>
    @foreach ($movies as $movie)
        <li class="list-group-item">
           <h1><a href="/singleMovie/{{$movie->id}}">{{$movie->title}}</a></h1>
                <p>{{$movie->storyline}}</p>
        </li>
    @endforeach
</ul>
@endsection

