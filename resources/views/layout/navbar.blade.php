<nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #151b20e1; height: 4em; position: fixed; width:100vw;">
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
                    <a class="nav-link" href="#">JOB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register')}}">REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
        .nav-link{
            color: white;
        }
    </style>