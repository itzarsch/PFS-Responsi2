@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Income</h1>

    <p>Monthly Income: ${{ $monthlyIncome }}</p>
    <p>Yearly Income: ${{ $yearlyIncome }}</p>
</div>
@endsection
