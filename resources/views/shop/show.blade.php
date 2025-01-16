@extends('layouts.app')

@section('content')
<div class="container">  
    <h1>{{ $book->title }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $book->cover_image }}" class="img-fluid" alt="{{ $book->title }}">
        </div>
        <div class="col-md-6">
            <h5>Genre: {{ $book->genre }}</h5>
            <h5>Author: {{ $book->author }}</h5>
            <p>{{ $book->description }}</p>
            <h5>Price: ${{ $book->price }}</h5>
            <form action="{{ route('shop.addToCart', $book->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-primary mt-3">
                    <i class="bi bi-cart"></i> Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
@endsection