@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">{{ $book->title }}</h1>
    <p><strong>Genre:</strong> {{ $book->genre }}</p>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Date Publish:</strong> {{ $book->date_publish }}</p>
    <p><strong>Price:</strong> ${{ $book->price }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection