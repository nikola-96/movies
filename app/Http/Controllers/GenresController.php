<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre){
        $latestMovies = $this->latestMovies;
        $movies = \App\Movie::where('genre', $genre)->get();
        return view('allMovies', compact('movies', 'latestMovies'));

    }
}
