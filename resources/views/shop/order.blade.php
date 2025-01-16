@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Order Form</h2>
    <form action="{{ route('shop.placeOrder') }}" method="POST">
        @csrf
        <!-- Form fields for user details (e.g., name, address, etc.) -->
        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
</div>
@endsection