@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="{{ route('password.change') }}" class="btn btn-primary">Change Password</a>
</div>
@endsection
