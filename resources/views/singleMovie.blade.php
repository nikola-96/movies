@extends('master')

@section('title', 'Single Movie')


@section('body')
    <h1>{{$movie->title}}</h1>
        <ul>
        <li> Gender: <a href="/genres/{{$movie->genre}}">{{$movie->genre}}</a></li>
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

    <form action="/comment/add/{{$movie->id}}" method="post">
        <p style="color:gray" >Add new comment.</p>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" name="content" placeholder="Your comment">
                </div>
            </div>
            <div style="display:none">
            <input type="text" class="form-control" name="movie_id" value="{{$movie->id}}">
            </div>
            <button type="submit" class="btn btn-secondary">Add Comment</button>
            @csrf

        </form>
    
    
        
@endsection