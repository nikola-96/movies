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
            
        <div class="container">
            <p><br><strong>Comments:</strong><br></p>
            <ul class="list-unstiled">
            @foreach($movie->comments as $comment)
                <li>
                <p>{{ $comment->content }}</p>
                <p>{{ $comment->created_at }}</p>
                </li>
            @endforeach
            </ul>
        </div>
    
        
@endsection