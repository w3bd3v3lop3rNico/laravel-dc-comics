@extends('layouts.app')

@section('content')

<form class="row g-3" action="{{ route('comics.store') }} " method="POST">
    @csrf
    
    <div class="col-12">
      <label for="inputAddress" class="form-label">Title</label>
      <input type="text" class="form-control" id="inputAddress" name="title" placeholder="Title">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Url Image</label>
        <input type="text" class="form-control" id="img" name="thumb">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Serie</label>
        <input type="text" class="form-control" id="serie" name="serie">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Sale date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Genre</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
    
@endsection