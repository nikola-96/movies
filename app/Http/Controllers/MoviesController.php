<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = \App\Movie::all();
        return view('/allMovies', compact('movies'));
    }
    public function show($id){
        $movie = \App\Movie::find($id);

        return view('/singleMovie', compact('movie'));
    }

    public function create(){
        
        return view('/createMovie');
    }
}
