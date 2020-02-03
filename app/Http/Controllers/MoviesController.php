<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $latestMovies = $this->latestMovies;
        $movies = \App\Movie::all();
        return view('/allMovies', compact('movies', 'latestMovies'));
    }
    public function show($id){
        $movie = \App\Movie::find($id);
        return view('/singleMovie', compact('movie'));
    }

    public function create(){
        return view('/createMovie');
    }
    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required|integer|between:1900,2020',
            'storyline' => 'required|max:1000'
        ]);
        \App\Movie::create($data);

        return redirect()->back();
    }
}
