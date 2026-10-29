
@extends('layout')

@section('content')
    <h1>Customer Accounts</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer['id'] }}</td>
                <td>{{ $customer['name'] }}</td>
                <td>{{ $customer['email'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
