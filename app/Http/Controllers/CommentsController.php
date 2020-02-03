<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(){
        $data = request()->validate([
            'movie_id'=> '',
            'content' => 'required',
        ]);
        \App\Comment::create($data);

        return redirect()->back();
    }
}
