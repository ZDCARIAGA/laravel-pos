
@extends('layout')

@section('content')
    <h1>User Accounts</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['role'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
