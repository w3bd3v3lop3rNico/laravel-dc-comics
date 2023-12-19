@extends('layouts.app')

@section('content')
<form class="row g-3" action="{{ route('comics.update', $comic) }} " method="POST">
    @csrf
    @method('PUT')
    
    <div class="col-12">
      <label for="inputAddress" class="form-label">Title</label>
      <input type="text" class="form-control" id="inputAddress" name="title" placeholder="Title" value="{{ $comic->title }}">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Url Image</label>
        <input type="text" class="form-control" id="img" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Serie</label>
        <input type="text" class="form-control" id="serie" name="serie" value="{{ $comic->serie }}">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Sale date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Genre</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
    
@endsection