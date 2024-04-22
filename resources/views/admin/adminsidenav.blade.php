<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="main">
        <ul class="navbar-nav mt-3">
            <div class="nav-item m-1">
                <a class="nav-link ps-3" href="{{ route('dashboard')}}"><b>Dashboard</b></a>
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
    <style>
        div .nav-item {
            width: 95%;
            height: 35px;
            display: flex;
            align-items: center;
        }

        div .nav-item {
            color: white;
            font-size: 14px;
        } 

        div .nav-item:hover {
            background-color: rgb(223, 223, 223);      
            color: black;      
        }
        
    </style>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html>  -->