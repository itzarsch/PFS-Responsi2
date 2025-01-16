@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to Admin Dashboard</h1>

    <div class="row">
        <!-- Views Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Views</h5>
                    <p class="card-text">Total Views: {{ $viewCount }}</p>
                    <a href="{{ route('admin.views') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Catalog Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Catalog</h5>
                    <p class="card-text">Total Books in Catalog: {{ $catalogCount }}</p>
                    <a href="{{ route('admin.catalog') }}" class="btn btn-primary">View Catalog</a>
                </div>
            </div>
        </div>

        <!-- Orders Count -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">Total Orders: {{ $orderCount }}</p>
                    <a href="#" class="btn btn-primary">View Orders</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Income Count -->
    <div class="row mt-4">
        <div class="col-md-4 offset-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Income</h5>
                    <p class="card-text">Monthly Income: ${{ $monthlyIncome }}</p>
                    <p class="card-text">Yearly Income: ${{ $yearlyIncome }}</p>
                    <a href="{{ route('admin.income') }}" class="btn btn-primary">View Income</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Orders -->
    <h3 class="mt-4">Latest Orders</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($latestOrders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
