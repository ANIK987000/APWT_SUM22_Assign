<h3 style="text-align:center">Login</h3>
@extends('main.main')
@section('content')
  
<form align="center" action="" method="post">
  {{@csrf_field()}}


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


  <input type="submit" value="Submit">
</form>


@endsection

