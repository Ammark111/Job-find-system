<div class="nav d-flex justify-content-around align-items-center" style=" width:100%; height: 3.56em; box-shadow: 0px 5px 4px grey;">
    <div class="">
    </div>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JOBS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">APPLICATION</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <li class="nav-item" style="height: 30px; font-size: ;">
        <a class="nav-link" href="{{ route('logout') }}">LOGOUT</a>
    </li>
</div>