<div class="nav  d-flex justify-content-between align-items-center" style="height: 3.5em; z-index: 1;  background-color: #ffffff; box-shadow: 0px 3px 3px grey;">
    <div class="open|close"  onclick="toggleNav()" style="cursor: pointer;">
        <i class="fa fa-bars ms-3" style="font-size: 30px;"></i>
    </div>
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
    <div class="dropdown nav-item me-3">
        <a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img style="width: 30px; border-radius: 30px;" src="{{ asset('asset/image/img1.png')}}" alt=""> <span style="color: black; ">Account</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route('changepassword')}}">Change Password</a></li>
            <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
        </ul>
    </div>
</div>