<h3 style="text-align:center"> Individual User Details  <br><br></h3>

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
        <td>Name</td>
        <td> {{$user->name}}</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>{{$user->id}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$user->email}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>{{$user->password}}</td>
    </tr>
    <tr><td>Type</td>
        <td>{{$user->type}}</td>
    </tr>
</table>
   
@endsection