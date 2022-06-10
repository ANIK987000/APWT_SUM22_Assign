<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style>
         .link{
            text-align:center;
        }
    </style>
    <body>
        <div class="link">
        
        <a href="{{route('other.dashboard')}}">Dashboard</a>
        <a href="{{route('other.admin_dashboard')}}">Admin Dashboard</a>
        <a href="{{route('other.user_dashboard')}}">User Dashboard</a>
       <a href="{{route('other.userDetails')}}">User Details</a>

        </div>
        <br>
        @yield('content')
    </body>
</html>