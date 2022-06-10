<h3 style="text-align:center">User Details Here !!!  <br><br></h3>

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

<h3 style="text-align:center">Individual Details <br><br></h3>
<table align="center"> 
    <tr>
        <td>Name</td>
        <td> {{$name}}</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>{{$id}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>{{$password}}</td>
    </tr>
    <tr><td>Type</td>
        <td>{{$type}}</td>
    </tr>
</table>
   <!-- Name : {{$name}}<br>
   ID   : {{$id}}<br>
   Email: {{$email}}<br>
   Password: {{$password}}<br>
   Type: {{$type}}<br> -->

@endsection