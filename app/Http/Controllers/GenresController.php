<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre){
        $movies = \App\Movie::where('genre', $genre)->get();
        return view('allMovies', compact('movies'));

    }
}
