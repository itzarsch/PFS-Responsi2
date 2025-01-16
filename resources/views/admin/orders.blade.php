@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orders</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Status</th>
                <th>Total Price</th>
                <th>Created At</th>
                <th>Books Ordered</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name ?? 'Guest' }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    @foreach($order->books as $book)
                        {{ $book->title }} (x{{ $book->pivot->quantity }})
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
