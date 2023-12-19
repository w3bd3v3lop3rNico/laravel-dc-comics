@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Desc.</th>
                        <th>Thumb</th>
                        <th>Price</th>
                        <th>Serie</th>
                        <th>Out date</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">
                                    {{ $comic->title }}
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Desc.</button>

                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasTopLabel">{{ $comic->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        {{ $comic->description }}
                                    </div>
                                </div>
                                
                            </td>
                            <td><img src="{{ $comic->thumb }}" alt="" width="100px"></td>
                            <td> ${{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('comics.edit', $comic) }}" >Edit</a>
                                <a class="btn btn-secondary btn-sm" href="#" >Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                Comics not founded
                            </td>
                        </tr>
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection