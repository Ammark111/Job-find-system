<div class="nav d-flex justify-content-around align-items-center" style="width:100%; height: 4em; box-shadow: 0px 5px 4px grey;">
    <button class="btn btn-primary">Dashbosrd</button>
    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-around">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Appliction</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img style="width: 30px; border-radius: 30px;" src="{{ asset('asset/image/img1.png')}}" alt=""> <span style="color: black; ">Account</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route('changepassword')}}">Change Password</a></li>
            <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
        </ul>
    </div>
</div>