@extends('master')

@section('title', 'Single Movie')


@section('body')
    <h1>{{$movie->title}}</h1>
        <ul>
            <li>Gender: {{$movie->genre}}</li>
            <li>The director: {{$movie->director}}</li>
            <li>Production year: {{$movie->year}}</li>
        </ul>

            <p>{{$movie->storyline}}</p>
        
@endsection