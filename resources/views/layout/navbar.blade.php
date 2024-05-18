<nav class="navbar navbar-expand-lg bg-dark" style="height: 4em; position: fixed; top: 0; width:100vw; backdrop-filter: blur(50px); z-index: 10;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav mx-auto" style="color: #fff;">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home')}}" style="color: #fff;">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">JOB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">BLOGS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register')}}" style="color: #fff;">REGISTER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login')}}" style="color: #fff;">LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
