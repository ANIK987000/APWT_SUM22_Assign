<h3 style="text-align:center">Admin Dashboard</h3>
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
<h3 style="text-align:center">Admin List</h3>
<table align="center">
        <tr>
            <th>NAME</th>
            <!-- <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Type</th> -->
        </tr>
        @foreach($admin as $u)
            <tr>
                <td><a href="{{route('other.userDetails',['id'=>$u->id])}}">{{$u->name}}</a></td>
                <!-- <td>{{$u->id}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->password}}</td>
                <td>{{$u->type}}</td> -->
            </tr>
        @endforeach
    </table>
    <h3 style="text-align:center">User List</h3>
    <table align="center">
        <tr>
            <th>NAME</th>
            <!-- <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Type</th> -->
        </tr>
        @foreach($user as $u)
            <tr>
                <td><a href="{{route('other.userDetails',['id'=>$u->id])}}">{{$u->name}}</a></td>
                <!-- <td>{{$u->id}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->password}}</td>
                <td>{{$u->type}}</td> -->
            </tr>
        @endforeach
    </table>
@endsection