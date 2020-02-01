@extends('master')

@section('title', 'Create Movie')


@section('body')

<form action="" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="genre" placeholder="Genre">
          </div>
  
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="director" placeholder="Director">
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="year" placeholder="Year of filming">
          </div>
  
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="story" placeholder="Stroyline">
        </div>
      </div>
      @csrf
      <button type="button" class="btn btn-secondary">Add Movie</button>
</form>

@endsection