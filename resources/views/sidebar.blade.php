    <h4>Last 5 movies.</h4>
    <ol class="list-unstyled">
        @foreach ($latestMovies as $latestMovie)
    <li><a href="/singleMovie/{{$latestMovie->id}}">{{$latestMovie->title}}</a></li>
        @endforeach
    </ol>
