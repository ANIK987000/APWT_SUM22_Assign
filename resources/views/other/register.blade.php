<h3 style="text-align:center">Registration</h3>
@extends('main.main')
@section('content')
  
<style>

</style>
<form align="center" action="" method="post">
  {{@csrf_field()}}
<!-- ____________________ -->
 
  <!-- <label for="id">ID:</label><br>
  <input type="text"  name="id" value="{{old('id')}}"><br>
  @error('id')
        <span class="text-danger">{{$message}}</span><br>
  @enderror -->

<!-- ____________________ -->
 
  <label for="name">Name:</label><br>
  <input type="text"  name="name" value="{{old('name')}}"><br>
  @error("name")
        <span class="text-danger">{{$message}}</span><br>
  @enderror

<!-- ____________________ -->

  <label for="email">Email:</label><br>
  <input type="email"  name="email" value="{{old('email')}}"><br>


  @error('email')
        <span class="text-danger">{{$message}}</span><br><br>
  @enderror

<!-- ____________________ -->

   <label for="password">Password:</label><br>
  <input type="password"  name="password" value="{{old('password')}}"><br>


  @error('password')
        <span class="text-danger">{{$message}}</span><br><br>
  @enderror
  
<!-- ____________________ -->

    <!-- <label for="type">Type:</label><br>
  <input type="type"  name="type" value="{{old('type')}}"><br>


  @error('type')
        <span class="text-danger">{{$message}}</span><br><br>
  @enderror -->

     <!-- ____________________ -->

  <input type="submit" value="Submit">
</form>


@endsection

