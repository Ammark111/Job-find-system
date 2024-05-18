<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
        @yield ('title')
</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawsome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .sidenav {
            height: 100%;
            width: 230px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #152626;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            width: 95%;  
            height: 40px;
            margin: 0 auto; 
            color: #fff;
            text-decoration: none;
            /* color: #000; */
            display: block;
            transition: 0.3s;
            border-radius: 3px;
        }

        li {
            padding: 3px;
        }

        .sidenav a:hover {
            background-color: #ddd;
            color: #000;
        }

        .sidenav .close-btn {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 30px;
            margin-left: 50px;
            cursor: pointer;
        }

        #main {
            transition: margin-left .5s;
            height: 100vh;
            margin-left: 230px; 
            background-color: #ffffff;
        }

        @media  (max-width: 801px ) {
            .sidenav {
                /* display: none; */
            }
        }
  </style>
</head>
<body>
    <div class="sidenav bg" id="sidenav">
        @include('layout.sidenav')
    </div>
    <div id="main">
        @include('layout.nav')
        <div class="container" style="margin-top: 3.5em">
            @yield ('content')
       </div>
    </div>

    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleNav() {
            var sidenav = document.getElementById("sidenav");
            if (sidenav.style.left === "0px") {
            sidenav.style.left = "-230px";
            document.getElementById("main").style.marginLeft = "0";
            } else {
            sidenav.style.left = "0";
            document.getElementById("main").style.marginLeft = "230px";
            }
        }

        function closeNav() {
            var sidenav = document.getElementById("sidenav");
            sidenav.style.left = "-230px";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>
</html>

