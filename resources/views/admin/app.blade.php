<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
<title>
        @yield('title')
</title>
<style>
    body {
    font-family: "Lato", sans-serif;
    }

    .sidenav {
    height: 100%;
    width: 230px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    }

    .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    color: #818181;
    display: block;
    }

    .sidenav a:hover {
    color: #f1f1f1;
    }

    .main {
    margin-left: 230px;
    font-size: ;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }
</style>
</head>
<body>
    <div class="sidenav">
        <div class="" style="height:15vh;">

        </div>
        <ul class="navbar-nav mt-3">
            <div class="nav-item m-1">
                <a class="nav-link ps-3" href="{{ route('admin')}}"><b>Dashboard</b></a>
            </div>
            <div class="nav-item m-1">
                <a class="nav-link ps-3" href="{{ route('user')}}"><b>Users</b></a>
            </div>
            <div class="nav-item m-1">
                <a class="nav-link ps-3" href="{{ route('job')}}"><b>Jobs</b></a>
            </div>
            <div class="nav-item m-1">
                <a class="nav-link ps-3" href="{{ route('professional')}}"><b>Applications</b></a>
            </div>
        </ul>
    </div>
    <div class="main">
        <div class="nav">
            @include('admin.adminnav')
        </div>
        <div class="container mt-5" style="width: 82vw; ">
            @yield('content')
        </div>
        <div class="footer">
            @include('layout.footer')
        </div>
    </div>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html> 