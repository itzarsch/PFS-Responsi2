@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users & Guests</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            <tr>
                <td>Guest</td>
                <td>Guest</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
