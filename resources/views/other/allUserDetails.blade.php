<h3 style="text-align:center">Main Dashboard</h3>
@extends('main.main1')
@section('content')

<style>
    table{
        border:3px solid black;
    }
    th{
        border:2px solid black;
    }
    td{
        border:1px solid black;
    }
</style>

<table align="center">
        <tr>
            <th>NAME</th>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Type</th>
        </tr>
        @foreach($users as $u)
            <tr>
                <td>{{$u->name}}</a></td>
                <td>{{$u->id}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->password}}</td>
                <td>{{$u->type}}</td>
            </tr>
        @endforeach
    </table>
@endsection