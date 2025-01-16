@extends('layouts.app')

@section('content')
<div class="container">
    @if(optional($cart)->items->isEmpty())
        <h2>Your cart is empty!</h2>
    @else
        <h2>Your Cart</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Genre</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(optional($cart)->items as $item)
                    <tr>
                        <td>{{ $item->book->title }}</td>
                        <td>{{ $item->book->genre }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ $item->book->price * $item->quantity }}</td>
                        <td>
                            <form action="{{ route('shop.removeItem', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ route('shop.orderNow') }}" class="btn btn-primary">Order Now</a>
        </div>
    @endif
</div>
@endsection
