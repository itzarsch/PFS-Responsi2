@extends('layouts.app')

@section('content')
    <h1>Detail Pesanan</h1>

    <p>ID Pesanan: {{ $order->id }}</p>
    <p>Produk: {{ $order->product->name }}</p>
    <p>Jumlah: {{ $order->quantity }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Alamat: {{ $order->address }}</p>

    <!-- Form untuk memperbarui status pesanan -->
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="status">Status Pesanan</label>
        <select name="status" id="status" class="form-control">
            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
        <button type="submit" class="btn btn-primary mt-2">Update Status</button>
    </form>
@endsection
