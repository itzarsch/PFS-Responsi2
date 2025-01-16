@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-genre">{{ $book->genre }}</p>
                    <h5 class="card-price">${{ $book->price }}</h5>
                </div>
                <div class="card-footer text-center">
                    <form action="{{ route('shop.addToCart', $book->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-cart"></i> Add to Cart
                        </button>
                        <a href="{{ route('shop.show', $book->id) }}" class="btn btn-primary">
                        View Details
                        </a>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection