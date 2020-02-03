@extends('master')

@section('title', 'Create Movie')


@section('body')
<h1 style="color:gray" >Add new movie.</h1>
    <form action="/createMovie" method="post">
        <div class="form-row">
            <div class="form-group col-md-5">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" name="genre" placeholder="Genre">
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" name="director" placeholder="Director">
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" name="storyline" placeholder="Storyline">
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" name="year" placeholder="Year of filming">
            </div>
        </div>
        @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                </div>
                @endif

        <button type="submit" class="btn btn-secondary">Add Movie</button>
    </form>

@endsection