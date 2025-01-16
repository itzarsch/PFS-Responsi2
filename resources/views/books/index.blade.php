@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add New Book</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Author</th>
                <th>Date Publish</th>
                <th>Price</th> <!-- Tambahkan kolom Price -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->date_publish }}</td>
                <td>${{ $book->price }}</td> <!-- Tampilkan Price -->
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection